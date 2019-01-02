<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing TekstType
 *
 *
 * XSD Type: Tekst
 */
class TekstType extends EnkelvoudigeWaardeType
{

    /**
     * @property string $waarde
     */
    private $waarde = null;

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

