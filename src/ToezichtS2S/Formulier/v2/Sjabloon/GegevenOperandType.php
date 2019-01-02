<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing GegevenOperandType
 *
 *
 * XSD Type: GegevenOperand
 */
class GegevenOperandType extends OperandType
{

    /**
     * @property string $gegevenIdentificatie
     */
    private $gegevenIdentificatie = null;

    /**
     * Gets as gegevenIdentificatie
     *
     * @return string
     */
    public function getGegevenIdentificatie()
    {
        return $this->gegevenIdentificatie;
    }

    /**
     * Sets a new gegevenIdentificatie
     *
     * @param string $gegevenIdentificatie
     * @return self
     */
    public function setGegevenIdentificatie(string $gegevenIdentificatie = null)
    {
        $this->gegevenIdentificatie = $gegevenIdentificatie;
        return $this;
    }


}

