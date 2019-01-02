<?php

namespace Container;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                './config/wsdl/bericht.v2.xml' => array(
                    'BerichtService' => array(
                        'soap12mtom_BerichtService' => array(
                            'operations' => array(
                                'Raadpleeg' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/Raadpleeg',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Raadpleeg',
                                    'method' => 'raadpleeg',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegInput',
                                        'parts' => array(
                                            'parameters' => 'Raadpleeg',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'HaalOp' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/HaalOp',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'HaalOp',
                                    'method' => 'haalOp',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpInput',
                                        'parts' => array(
                                            'parameters' => 'HaalOp',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpOutput',
                                        'parts' => array(
                                            'parameters' => 'HaalOpResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'MaakAan' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/MaakAan',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'MaakAan',
                                    'method' => 'maakAan',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanInput',
                                        'parts' => array(
                                            'parameters' => 'MaakAan',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanOutput',
                                        'parts' => array(
                                            'parameters' => 'MaakAanResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v2/soap12mtom/bericht',
                        ),
                    ),
                    'MetadataService' => array(
                        'soap12mtom_MetadataService' => array(
                            'operations' => array(
                                'RaadpleegCodelijst' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijst/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijst',
                                    'method' => 'raadpleegCodelijst',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijst',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'RaadpleegCodelijstRelatie' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijstRelatie/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijstRelatie',
                                    'method' => 'raadpleegCodelijstRelatie',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatie',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatieResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/metadata',
                        ),
                    ),
                    'NotificatieService' => array(
                        'soap12mtom_NotificatieService' => array(
                            'operations' => array(
                                'Zoek' => array(
                                    'action' => 'http://rechtspraak.nl/Service/NotificatieService/Zoek/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Zoek',
                                    'method' => 'zoek',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekInput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekInput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekInput',
                                        'parts' => array(
                                            'parameters' => 'Zoek',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekOutput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekOutput',
                                        'parts' => array(
                                            'parameters' => 'ZoekResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/notificatie',
                        ),
                    ),
                ),
                './config/wsdl/metadata.v1.xml' => array(
                    'BerichtService' => array(
                        'soap12mtom_BerichtService' => array(
                            'operations' => array(
                                'Raadpleeg' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/Raadpleeg',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Raadpleeg',
                                    'method' => 'raadpleeg',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegInput',
                                        'parts' => array(
                                            'parameters' => 'Raadpleeg',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'HaalOp' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/HaalOp',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'HaalOp',
                                    'method' => 'haalOp',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpInput',
                                        'parts' => array(
                                            'parameters' => 'HaalOp',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpOutput',
                                        'parts' => array(
                                            'parameters' => 'HaalOpResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'MaakAan' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/MaakAan',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'MaakAan',
                                    'method' => 'maakAan',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanInput',
                                        'parts' => array(
                                            'parameters' => 'MaakAan',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanOutput',
                                        'parts' => array(
                                            'parameters' => 'MaakAanResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v2/soap12mtom/bericht',
                        ),
                    ),
                    'MetadataService' => array(
                        'soap12mtom_MetadataService' => array(
                            'operations' => array(
                                'RaadpleegCodelijst' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijst/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijst',
                                    'method' => 'raadpleegCodelijst',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijst',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'RaadpleegCodelijstRelatie' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijstRelatie/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijstRelatie',
                                    'method' => 'raadpleegCodelijstRelatie',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatie',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatieResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/metadata',
                        ),
                    ),
                    'NotificatieService' => array(
                        'soap12mtom_NotificatieService' => array(
                            'operations' => array(
                                'Zoek' => array(
                                    'action' => 'http://rechtspraak.nl/Service/NotificatieService/Zoek/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Zoek',
                                    'method' => 'zoek',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekInput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekInput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekInput',
                                        'parts' => array(
                                            'parameters' => 'Zoek',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekOutput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekOutput',
                                        'parts' => array(
                                            'parameters' => 'ZoekResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/notificatie',
                        ),
                    ),
                ),
                './config/wsdl/notificatie.v1.xml' => array(
                    'BerichtService' => array(
                        'soap12mtom_BerichtService' => array(
                            'operations' => array(
                                'Raadpleeg' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/Raadpleeg',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Raadpleeg',
                                    'method' => 'raadpleeg',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegInput',
                                        'parts' => array(
                                            'parameters' => 'Raadpleeg',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\RaadpleegOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\RaadpleegOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\RaadpleegOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'HaalOp' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/HaalOp',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'HaalOp',
                                    'method' => 'haalOp',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpInput',
                                        'parts' => array(
                                            'parameters' => 'HaalOp',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\HaalOpOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\HaalOpOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\HaalOpOutput',
                                        'parts' => array(
                                            'parameters' => 'HaalOpResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'MaakAan' => array(
                                    'action' => 'http://rechtspraak.nl/ToezichtS2S/Bericht/v2/BerichtService/MaakAan',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'MaakAan',
                                    'method' => 'maakAan',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanInput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanInput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanInput',
                                        'parts' => array(
                                            'parameters' => 'MaakAan',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Messages\\MaakAanOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapEnvelope12\\Headers\\MaakAanOutput',
                                        'part_fqcn' => 'ToezichtS2S\\Bericht\\v2\\SoapParts\\MaakAanOutput',
                                        'parts' => array(
                                            'parameters' => 'MaakAanResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v2/soap12mtom/bericht',
                        ),
                    ),
                    'MetadataService' => array(
                        'soap12mtom_MetadataService' => array(
                            'operations' => array(
                                'RaadpleegCodelijst' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijst/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijst',
                                    'method' => 'raadpleegCodelijst',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijst',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'RaadpleegCodelijstRelatie' => array(
                                    'action' => 'http://rechtspraak.nl/Service/MetadataService/RaadpleegCodelijstRelatie/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'RaadpleegCodelijstRelatie',
                                    'method' => 'raadpleegCodelijstRelatie',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieInput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieInput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieInput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatie',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Messages\\RaadpleegCodelijstRelatieOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapEnvelope12\\Headers\\RaadpleegCodelijstRelatieOutput',
                                        'part_fqcn' => 'ToezichtS2S\\MetadataService\\v1\\SoapParts\\RaadpleegCodelijstRelatieOutput',
                                        'parts' => array(
                                            'parameters' => 'RaadpleegCodelijstRelatieResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/metadata',
                        ),
                    ),
                    'NotificatieService' => array(
                        'soap12mtom_NotificatieService' => array(
                            'operations' => array(
                                'Zoek' => array(
                                    'action' => 'http://rechtspraak.nl/Service/NotificatieService/Zoek/v1',
                                    'style' => 'document',
                                    'version' => '1.2',
                                    'name' => 'Zoek',
                                    'method' => 'zoek',
                                    'input' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekInput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekInput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekInput',
                                        'parts' => array(
                                            'parameters' => 'Zoek',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Messages\\ZoekOutput',
                                        'headers_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapEnvelope12\\Headers\\ZoekOutput',
                                        'part_fqcn' => 'ToezichtS2S\\NotificatieService\\v1\\SoapParts\\ZoekOutput',
                                        'parts' => array(
                                            'parameters' => 'ZoekResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'https://api.a-rechtspraak.nl/mijnrechtspraak-test/v1/soap12mtom/notificatie',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'http://schemas.microsoft.com/2003/10/Serialization/' => 'ToezichtS2S\\Serialization',
                    'http://rechtspraak.nl/Service/Algemeen/v1' => 'ToezichtS2S\\Service\\Algemeen\\v1',
                    'http://rechtspraak.nl/Model/Algemeen/v1' => 'ToezichtS2S\\Model\\Algemeen\\v1',
                    'http://rechtspraak.nl/Service/DataTypes' => 'ToezichtS2S\\Service\\DataTypes',
                    'http://rechtspraak.nl/Service/Metadata/v1' => 'ToezichtS2S\\Service\\Metadata\\v1',
                    'http://rechtspraak.nl/Service/Metadata' => 'ToezichtS2S\\Service\\Metadata\\Generic',
                    'http://rechtspraak.nl/MetadataService/v1' => 'ToezichtS2S\\MetadataService\\v1',
                    'http://rechtspraak.nl/NotificatieService/v1' => 'ToezichtS2S\\NotificatieService\\v1',
                    'http://rechtspraak.nl/Service/Notificaties/v1' => 'ToezichtS2S\\Notificaties\\v1',
                    'http://rechtspraak.nl/ToezichtS2S/Algemeen/v2' => 'ToezichtS2S\\Algemeen\\v2',
                    'http://rechtspraak.nl/ToezichtS2S/Bericht/v2' => 'ToezichtS2S\\Bericht\\v2',
                    'http://rechtspraak.nl/ToezichtS2S/Formulier/v2' => 'ToezichtS2S\\Formulier\\v2',
                ),
                'destinations_php' => array(
                    'ToezichtS2S\\Model\\Algemeen\\v1' => 'src/ToezichtS2S/Model/Algemeen/v1',
                    'ToezichtS2S\\Serialization' => 'src/ToezichtS2S/Serialization',
                    'ToezichtS2S\\Service\\Algemeen\\v1' => 'src/ToezichtS2S/Service/Algemeen/v1',
                    'ToezichtS2S\\Service\\DataTypes' => 'src/ToezichtS2S/Service/DataTypes',
                    'ToezichtS2S\\Service\\Metadata\\Generic' => 'src/ToezichtS2S/Service/Metadata/Generic',
                    'ToezichtS2S\\Service\\Metadata\\v1' => 'src/ToezichtS2S/Service/Metadata/v1',
                    'ToezichtS2S\\MetadataService\\v1' => 'src/ToezichtS2S/MetadataService/v1',
                    'ToezichtS2S\\NotificatieService\\v1' => 'src/ToezichtS2S/NotificatieService/v1',
                    'ToezichtS2S\\Notificaties\\v1' => 'src/ToezichtS2S/Notificaties/v1',
                    'ToezichtS2S\\Algemeen\\v2' => 'src/ToezichtS2S/Algemeen/v2',
                    'ToezichtS2S\\Bericht\\v2' => 'src/ToezichtS2S/Bericht/v2',
                    'ToezichtS2S\\Formulier\\v2' => 'src/ToezichtS2S/Formulier/v2',
                ),
                'destinations_jms' => array(
                    'ToezichtS2S\\Serialization' => 'metadata/Serialization',
                    'ToezichtS2S\\Service\\Algemeen\\v1' => 'metadata/Service/Algemeen/v1',
                    'ToezichtS2S\\Model\\Algemeen\\v1' => 'metadata/Model/Algemeen/v1',
                    'ToezichtS2S\\Service\\DataTypes' => 'metadata/Service/DataTypes',
                    'ToezichtS2S\\Service\\Metadata\\v1' => 'metadata/Service/Metadata/v1',
                    'ToezichtS2S\\Service\\Metadata\\Generic' => 'metadata/Service/Metadata/Generic',
                    'ToezichtS2S\\MetadataService\\v1' => 'metadata/MetadataService/v1',
                    'ToezichtS2S\\NotificatieService\\v1' => 'metadata/NotificatieService/v1',
                    'ToezichtS2S\\Notificaties\\v1' => 'metadata/Notificaties/v1',
                    'ToezichtS2S\\Algemeen\\v2' => 'metadata/Algemeen/v2',
                    'ToezichtS2S\\Bericht\\v2' => 'metadata/Bericht/v2',
                    'ToezichtS2S\\Formulier\\v2' => 'metadata/Formulier/v2',
                ),
                'metadata' => array(
                    './config/wsdl/bericht.v2.xml' => NULL,
                    './config/wsdl/metadata.v1.xml' => NULL,
                    './config/wsdl/notificatie.v1.xml' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
