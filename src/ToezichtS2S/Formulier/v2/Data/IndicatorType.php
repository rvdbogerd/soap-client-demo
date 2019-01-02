<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing IndicatorType
 *
 *
 * XSD Type: Indicator
 */
class IndicatorType extends EnkelvoudigeWaardeType
{

    /**
     * @property bool $indicatie
     */
    private $indicatie = null;

    /**
     * Gets as indicatie
     *
     * @return bool
     */
    public function getIndicatie()
    {
        return $this->indicatie;
    }

    /**
     * Sets a new indicatie
     *
     * @param bool $indicatie
     * @return self
     */
    public function setIndicatie(bool $indicatie = null)
    {
        $this->indicatie = $indicatie;
        return $this;
    }


}

