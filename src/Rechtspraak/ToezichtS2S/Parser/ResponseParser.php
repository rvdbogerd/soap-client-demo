<?php

declare(strict_types=1);

namespace Rechtspraak\ToezichtS2S\Parser;

use DOMDocument;
use Psr\Http\Message\ResponseInterface;

class ResponseParser implements ResponseParserInterface
{

    public function parse(ResponseInterface $response): DOMDocument
    {
        $httpBody = $this->stripHttpHeaders($response);

        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->loadXML($httpBody);

        return $dom;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return bool|string
     */
    private function stripHttpHeaders(ResponseInterface $response)
    {
        $httpBody = (string) $response->getBody();
        $xmlTagPos = strpos($httpBody, '<?xml');
        $envTagPos = strpos($httpBody, '<s:Envelope');

        if (false === $xmlTagPos && false === $envTagPos) {
//            throw new ToezichtGenericException('Invalid response, could not parse xml');
        }

        if (false !== $xmlTagPos && $xmlTagPos < $envTagPos) {
            $startPos = $xmlTagPos;
        } else {
            $startPos = $envTagPos;
        }

        $endPos = strpos($httpBody, '</s:Envelope>') - $startPos + 13;
        $httpBody = substr($httpBody, $startPos, $endPos);

        return $httpBody;
    }
}