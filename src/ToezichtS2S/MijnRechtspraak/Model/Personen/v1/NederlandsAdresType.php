<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing NederlandsAdresType
 *
 *
 * XSD Type: NederlandsAdres
 */
class NederlandsAdresType extends AdresType
{

    /**
     * @property string $woonplaats
     */
    private $woonplaats = null;

    /**
     * Gets as woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * Sets a new woonplaats
     *
     * @param string $woonplaats
     * @return self
     */
    public function setWoonplaats(string $woonplaats = null)
    {
        $this->woonplaats = $woonplaats;
        return $this;
    }


}

