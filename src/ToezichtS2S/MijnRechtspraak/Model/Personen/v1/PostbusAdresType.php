<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing PostbusAdresType
 *
 *
 * XSD Type: PostbusAdres
 */
class PostbusAdresType extends NederlandsAdresType
{

    /**
     * @property int $postbusNummer
     */
    private $postbusNummer = null;

    /**
     * @property string $postcode
     */
    private $postcode = null;

    /**
     * Gets as postbusNummer
     *
     * @return int
     */
    public function getPostbusNummer()
    {
        return $this->postbusNummer;
    }

    /**
     * Sets a new postbusNummer
     *
     * @param int $postbusNummer
     * @return self
     */
    public function setPostbusNummer(int $postbusNummer = null)
    {
        $this->postbusNummer = $postbusNummer;
        return $this;
    }

    /**
     * Gets as postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Sets a new postcode
     *
     * @param string $postcode
     * @return self
     */
    public function setPostcode(string $postcode = null)
    {
        $this->postcode = $postcode;
        return $this;
    }


}

