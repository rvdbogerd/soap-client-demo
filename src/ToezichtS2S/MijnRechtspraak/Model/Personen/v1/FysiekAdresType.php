<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing FysiekAdresType
 *
 *
 * XSD Type: FysiekAdres
 */
class FysiekAdresType extends NederlandsAdresType
{

    /**
     * @property string $huisletter
     */
    private $huisletter = null;

    /**
     * @property int $huisnummer
     */
    private $huisnummer = null;

    /**
     * @property string $huisnummerToevoeging
     */
    private $huisnummerToevoeging = null;

    /**
     * @property string $postcode
     */
    private $postcode = null;

    /**
     * @property string $straat
     */
    private $straat = null;

    /**
     * Gets as huisletter
     *
     * @return string
     */
    public function getHuisletter()
    {
        return $this->huisletter;
    }

    /**
     * Sets a new huisletter
     *
     * @param string $huisletter
     * @return self
     */
    public function setHuisletter(string $huisletter = null)
    {
        $this->huisletter = $huisletter;
        return $this;
    }

    /**
     * Gets as huisnummer
     *
     * @return int
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    /**
     * Sets a new huisnummer
     *
     * @param int $huisnummer
     * @return self
     */
    public function setHuisnummer(int $huisnummer = null)
    {
        $this->huisnummer = $huisnummer;
        return $this;
    }

    /**
     * Gets as huisnummerToevoeging
     *
     * @return string
     */
    public function getHuisnummerToevoeging()
    {
        return $this->huisnummerToevoeging;
    }

    /**
     * Sets a new huisnummerToevoeging
     *
     * @param string $huisnummerToevoeging
     * @return self
     */
    public function setHuisnummerToevoeging(string $huisnummerToevoeging = null)
    {
        $this->huisnummerToevoeging = $huisnummerToevoeging;
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

    /**
     * Gets as straat
     *
     * @return string
     */
    public function getStraat()
    {
        return $this->straat;
    }

    /**
     * Sets a new straat
     *
     * @param string $straat
     * @return self
     */
    public function setStraat(string $straat = null)
    {
        $this->straat = $straat;
        return $this;
    }


}

