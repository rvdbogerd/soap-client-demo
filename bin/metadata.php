<?php
namespace Example;

use Builder\CodelijstVerzoekBuilder;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use Rechtspraak\ToezichtS2S\Formatter\WseRequestFormatter;
use Rechtspraak\ToezichtS2S\Parser\ResponseParser;
use Subscriber\HeaderSignHandler;
use ToezichtS2S\MetadataService\v1\SoapStubs\MetadataService;
use ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoek;
use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use Symfony\Component\VarDumper\VarDumper;


// the metadata container
use Container\SoapContainer;

require __DIR__ . '/../vendor/autoload.php';

$container = new SoapContainer();

$certPath = '/Users/robbert/projects/armarium/armarium/tests/Soap/data';
$wseFormatter = new WseRequestFormatter($certPath.'/b2bi-a3.pem', $certPath.'/b2bi-a3.key');
$responseParser = new ResponseParser();
$subscriber = new HeaderSignHandler($wseFormatter, $responseParser);

$serializerBuilder = SoapContainerBuilder::createSerializerBuilderFromContainer($container);
$serializerBuilder->configureListeners(function (EventDispatcher $dispatcher) use ($subscriber) {
//    $dispatcher->addSubscriber($subscriber);
});
$serializer = $serializerBuilder->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');


$factory = new ClientFactory($metadata, $serializer);

/** @var MetadataService $client */
$client = $factory->getClient(
    './config/wsdl/metadata.v1.xml',
    "soap12mtom_MetadataService",
    "MetadataService"
);

$verzoekBuilder = new CodelijstVerzoekBuilder();
$result = $client->raadpleegCodelijst($verzoekBuilder->build());

VarDumper::dump($result);