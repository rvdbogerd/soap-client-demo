<?php

namespace ToezichtS2S\Model\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing ObjectIdentificatieType
 *
 *
 * XSD Type: ObjectIdentificatie
 */
class ObjectIdentificatieType extends ExtensibleDataObjectType
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

