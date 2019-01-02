<?php

namespace ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType;

/**
 * Class representing KenmerkAType
 */
class KenmerkAType
{

    /**
     * @property string $naam
     */
    private $naam = null;

    /**
     * @property string $waarde
     */
    private $waarde = null;

    /**
     * Gets as naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Sets a new naam
     *
     * @param string $naam
     * @return self
     */
    public function setNaam(string $naam = null)
    {
        $this->naam = $naam;
        return $this;
    }

    /**
     * Gets as waarde
     *
     * @return string
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * Sets a new waarde
     *
     * @param string $waarde
     * @return self
     */
    public function setWaarde(string $waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }


}

