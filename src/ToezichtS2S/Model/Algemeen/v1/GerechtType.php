<?php

namespace ToezichtS2S\Model\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing GerechtType
 *
 *
 * XSD Type: Gerecht
 */
class GerechtType extends ExtensibleDataObjectType
{

    /**
     * @property string $behandellocatie
     */
    private $behandellocatie = null;

    /**
     * @property string $instantie
     */
    private $instantie = null;

    /**
     * Gets as behandellocatie
     *
     * @return string
     */
    public function getBehandellocatie()
    {
        return $this->behandellocatie;
    }

    /**
     * Sets a new behandellocatie
     *
     * @param string $behandellocatie
     * @return self
     */
    public function setBehandellocatie(string $behandellocatie = null)
    {
        $this->behandellocatie = $behandellocatie;
        return $this;
    }

    /**
     * Gets as instantie
     *
     * @return string
     */
    public function getInstantie()
    {
        return $this->instantie;
    }

    /**
     * Sets a new instantie
     *
     * @param string $instantie
     * @return self
     */
    public function setInstantie(string $instantie = null)
    {
        $this->instantie = $instantie;
        return $this;
    }


}

