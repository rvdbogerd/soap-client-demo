<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing StandaardMaakAanAntwoordType
 *
 *
 * XSD Type: StandaardMaakAanAntwoord
 */
class StandaardMaakAanAntwoordType extends AntwoordType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * Gets as identificatie
     *
     * @return string
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(string $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }


}

