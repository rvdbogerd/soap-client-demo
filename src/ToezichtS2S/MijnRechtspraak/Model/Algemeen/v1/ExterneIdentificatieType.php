<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1;

/**
 * Class representing ExterneIdentificatieType
 *
 *
 * XSD Type: ExterneIdentificatie
 */
class ExterneIdentificatieType extends DetailGegevensGroepType
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

