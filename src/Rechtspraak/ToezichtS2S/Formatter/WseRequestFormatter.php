<?php

declare(strict_types=1);

namespace Rechtspraak\ToezichtS2S\Formatter;

use DOMDocument;
use DOMElement;
use DOMXPath;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use RobRichards\WsePhp\WSASoap;
use RobRichards\WsePhp\WSSESoap;
use RobRichards\XMLSecLibs\XMLSecurityKey;

class WseRequestFormatter
{
    private $addressing = true;
    private $signHeaders = true;
    /**
     * @var string
     */
    private $certPath;
    /**
     * @var string
     */
    private $keyPath;

    public function __construct(string $certPath, string $keyPath)
    {
        $this->certPath = $certPath;
        $this->keyPath = $keyPath;
    }

    public function formatRequest(RequestInterface $request, string $action): RequestInterface
    {

        $body = $request->getBody()->getContents();
        $headers = $request->getHeaders();
        $uri = $request->getUri()->__toString();

        if (stripos($body, ':Envelope') === false) {
            $body = '
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope">
   <soap:Body>
       '.$body.'
   </soap:Body>
</soap:Envelope>';
        }

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->loadXML($body);

//        $this->addVerzoekContext($dom);
        $this->addAddressing($uri, $action, $dom);
        $this->signHeaders($dom);

        return new Request($request->getMethod(), $request->getUri(), $headers, $dom->saveXML());
    }

    public function formatXml(string $xml, string $action): string
    {

    }

    public function format(DOMDocument $document, string $action): DOMDocument
    {
        
    }

    private function addVerzoekContext(DOMDocument $dom)
    {
        $contextNode = new DOMElement('OperatieContext');
        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('algv1', 'http://rechtspraak.nl/Service/Algemeen/v1');
        $xpath->registerNamespace('soap', 'http://www.w3.org/2003/05/soap-envelope');
        $verzoekNode = $xpath->query('//soap:Envelope/soap:Body/algv1:Verzoek');
        $firstChild = $verzoekNode->item(0);

        $dom->insertBefore($contextNode, $firstChild);
    }

    private function addAddressing(string $location, string $action, DOMDocument $dom): void
    {
        if ($this->addressing) {
            $objWSA = new WSASoap($dom, WSASoap::WSANS_2005);
            $objWSA->addAction($action);
            $objWSA->addTo($location);
            $objWSA->addMessageID();
            $objWSA->addReplyTo();
        }
    }

    /**
     * @param $dom
     *
     * @return mixed
     */
    private function signHeaders(DOMDocument $dom): string
    {
        $objWSSE = new WSSESoap($dom);

        /* Sign all headers to include signing the WS-Addressing headers */
        $objWSSE->signAllHeaders = false;
        $objWSSE->signBody = false;
        $objWSSE->addTimestamp();

        /* Add certificate (BinarySecurityToken) to the message and attach pointer to Signature */
        $token = $objWSSE->addBinaryToken(
            file_get_contents($this->certPath)
        );

        /* create new XMLSec Key using RSA SHA-1 and type is private key */
        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type' => 'private'));

        /* load the private key from file - last arg is bool if key in file (true) or is string (FALSE) */
        $objKey->loadKey(file_get_contents($this->keyPath));

        /* Sign the message - also signs appropriate WS-Security items */
        $options = [
            'insertBefore' => false,
            'signSpecificHeaders' => [
                WSSESoap::WSUNS => [
                    'Timestamp' => true,
                ],
                WSASoap::WSANS_2005 => [
                    'To' => true,
                ],
            ],
        ];
        $objWSSE->signSoapDoc($objKey, $options);
        $objWSSE->attachTokentoSig($token);

        $xml = $objWSSE->saveXML();

        return $xml;
    }
}
