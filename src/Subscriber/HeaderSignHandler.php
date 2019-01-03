<?php

declare(strict_types=1);

namespace Subscriber;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\XmlSerializationVisitor;
use Rechtspraak\ToezichtS2S\Formatter\WseRequestFormatter;
use Rechtspraak\ToezichtS2S\Parser\ResponseParserInterface;

class HeaderSignHandler implements EventSubscriberInterface
{
    /**
     * @var WseRequestFormatter
     */
    private $requestFormatter;
    /**
     * @var ResponseParserInterface
     */
    private $responseParser;

    public function __construct(WseRequestFormatter $requestFormatter, ResponseParserInterface $responseParser)
    {
        $this->requestFormatter = $requestFormatter;
        $this->responseParser = $responseParser;
    }

    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.post_serialize',
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
//                'type' => 'GoetasWebservices\SoapServices\SoapClient\Envelope\SoapEnvelope12\Parts\Fault\FaultDetail',
                'method' => 'onPostSerialize',
                'priority' => -100,
            ),
//            array(
//                'event' => 'serializer.post_deserialize',
//                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
//                'format' => 'xml',
//                'method' => 'onPostDeserialize',
//                'priority' => -100,
//            ),
        );
    }

    public function onPostSerialize(ObjectEvent $event)
    {
        /** @var XmlSerializationVisitor $visitor */
        $visitor = $event->getVisitor();
        /** DomDocument $document */
        $document = $visitor->getDocument();

        $request = $this->requestFormatter->format($document, $soapOperation['action']);
    }
//
//    public function serializeSignedHeaders(XmlSerializationVisitor $visitor, \SimpleXMLElement $data, array $type, SerializationContext $context)
//    {
//        $domElement = dom_import_simplexml($data);
//
//        $document = new \DOMDocument('1.0', 'utf-8');
//
//        $xml = '';
//        foreach ($domElement->childNodes as $child) {
//            $newEl = $document->importNode($child, true);
//            $xml .= $document->saveXML($newEl);
//        }
//        return $xml;
//    }
}



