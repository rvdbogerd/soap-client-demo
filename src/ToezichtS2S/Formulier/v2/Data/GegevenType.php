<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing GegevenType
 *
 *
 * XSD Type: Gegeven
 */
class GegevenType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\WaardeType $waarde
     */
    private $waarde = null;

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
     * Gets as waarde
     *
     * @return \ToezichtS2S\Formulier\v2\Data\WaardeType
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * Sets a new waarde
     *
     * @param \ToezichtS2S\Formulier\v2\Data\WaardeType $waarde
     * @return self
     */
    public function setWaarde(\ToezichtS2S\Formulier\v2\Data\WaardeType $waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }


}

