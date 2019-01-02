<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing AchternaamType
 *
 *
 * XSD Type: Achternaam
 */
class AchternaamType extends ExtensibleDataObjectType
{

    /**
     * @property string $naam
     */
    private $naam = null;

    /**
     * @property string $voorvoegsel
     */
    private $voorvoegsel = null;

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
     * Gets as voorvoegsel
     *
     * @return string
     */
    public function getVoorvoegsel()
    {
        return $this->voorvoegsel;
    }

    /**
     * Sets a new voorvoegsel
     *
     * @param string $voorvoegsel
     * @return self
     */
    public function setVoorvoegsel(string $voorvoegsel = null)
    {
        $this->voorvoegsel = $voorvoegsel;
        return $this;
    }


}

