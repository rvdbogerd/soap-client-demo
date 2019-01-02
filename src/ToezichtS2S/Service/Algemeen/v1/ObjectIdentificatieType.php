<?php

namespace ToezichtS2S\Service\Algemeen\v1;

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
     * @property int $modelVersie
     */
    private $modelVersie = null;

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
     * Gets as modelVersie
     *
     * @return int
     */
    public function getModelVersie()
    {
        return $this->modelVersie;
    }

    /**
     * Sets a new modelVersie
     *
     * @param int $modelVersie
     * @return self
     */
    public function setModelVersie(int $modelVersie = null)
    {
        $this->modelVersie = $modelVersie;
        return $this;
    }


}

