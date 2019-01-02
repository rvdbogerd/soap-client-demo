<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing VerzoekContextType
 *
 *
 * XSD Type: VerzoekContext
 */
class VerzoekContextType extends AntwoordContextType
{

    /**
     * @property string $organisatie
     */
    private $organisatie = null;

    /**
     * @property string $register
     */
    private $register = null;

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\SoftwareVersieType $softwareVersie
     */
    private $softwareVersie = null;

    /**
     * Gets as organisatie
     *
     * @return string
     */
    public function getOrganisatie()
    {
        return $this->organisatie;
    }

    /**
     * Sets a new organisatie
     *
     * @param string $organisatie
     * @return self
     */
    public function setOrganisatie(string $organisatie = null)
    {
        $this->organisatie = $organisatie;
        return $this;
    }

    /**
     * Gets as register
     *
     * @return string
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Sets a new register
     *
     * @param string $register
     * @return self
     */
    public function setRegister(string $register = null)
    {
        $this->register = $register;
        return $this;
    }

    /**
     * Gets as softwareVersie
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\SoftwareVersieType
     */
    public function getSoftwareVersie()
    {
        return $this->softwareVersie;
    }

    /**
     * Sets a new softwareVersie
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\SoftwareVersieType $softwareVersie
     * @return self
     */
    public function setSoftwareVersie(\ToezichtS2S\Service\Algemeen\v1\SoftwareVersieType $softwareVersie = null)
    {
        $this->softwareVersie = $softwareVersie;
        return $this;
    }


}

