<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing NietNatuurlijkPersoonType
 *
 *
 * XSD Type: NietNatuurlijkPersoon
 */
class NietNatuurlijkPersoonType extends PersoonDetailType
{

    /**
     * @property string $naam
     */
    private $naam = null;

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


}

