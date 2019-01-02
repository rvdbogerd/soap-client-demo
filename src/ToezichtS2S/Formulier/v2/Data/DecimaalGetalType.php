<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing DecimaalGetalType
 *
 *
 * XSD Type: DecimaalGetal
 */
class DecimaalGetalType extends EnkelvoudigeWaardeType
{

    /**
     * @property float $getal
     */
    private $getal = null;

    /**
     * Gets as getal
     *
     * @return float
     */
    public function getGetal()
    {
        return $this->getal;
    }

    /**
     * Sets a new getal
     *
     * @param float $getal
     * @return self
     */
    public function setGetal(float $getal = null)
    {
        $this->getal = $getal;
        return $this;
    }


}

