<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing GeheelGetalType
 *
 *
 * XSD Type: GeheelGetal
 */
class GeheelGetalType extends EnkelvoudigeWaardeType
{

    /**
     * @property int $getal
     */
    private $getal = null;

    /**
     * Gets as getal
     *
     * @return int
     */
    public function getGetal()
    {
        return $this->getal;
    }

    /**
     * Sets a new getal
     *
     * @param int $getal
     * @return self
     */
    public function setGetal(int $getal = null)
    {
        $this->getal = $getal;
        return $this;
    }


}

