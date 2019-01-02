<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing MogelijkeWaardeType
 *
 *
 * XSD Type: MogelijkeWaarde
 */
class MogelijkeWaardeType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property string $tekst
     */
    private $tekst = null;

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

    /**
     * Gets as tekst
     *
     * @return string
     */
    public function getTekst()
    {
        return $this->tekst;
    }

    /**
     * Sets a new tekst
     *
     * @param string $tekst
     * @return self
     */
    public function setTekst(string $tekst = null)
    {
        $this->tekst = $tekst;
        return $this;
    }


}

