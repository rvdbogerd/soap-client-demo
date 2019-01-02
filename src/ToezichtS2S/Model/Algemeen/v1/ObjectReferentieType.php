<?php

namespace ToezichtS2S\Model\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing ObjectReferentieType
 *
 *
 * XSD Type: ObjectReferentie
 */
class ObjectReferentieType extends ExtensibleDataObjectType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerken
     */
    private $kenmerken = null;

    /**
     * @property int[] $modelVersies
     */
    private $modelVersies = null;

    /**
     * @property string $type
     */
    private $type = null;

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
     * Adds as kenmerk
     *
     * @return self
     * @param \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk
     */
    public function addToKenmerken(\ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk)
    {
        $this->kenmerken[] = $kenmerk;
        return $this;
    }

    /**
     * isset kenmerken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKenmerken($index)
    {
        return isset($this->kenmerken[$index]);
    }

    /**
     * unset kenmerken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKenmerken($index)
    {
        unset($this->kenmerken[$index]);
    }

    /**
     * Gets as kenmerken
     *
     * @return \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[]
     */
    public function getKenmerken()
    {
        return $this->kenmerken;
    }

    /**
     * Sets a new kenmerken
     *
     * @param \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerken
     * @return self
     */
    public function setKenmerken(array $kenmerken = null)
    {
        $this->kenmerken = $kenmerken;
        return $this;
    }

    /**
     * Adds as modelVersie
     *
     * @return self
     * @param int $modelVersie
     */
    public function addToModelVersies($modelVersie)
    {
        $this->modelVersies[] = $modelVersie;
        return $this;
    }

    /**
     * isset modelVersies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModelVersies($index)
    {
        return isset($this->modelVersies[$index]);
    }

    /**
     * unset modelVersies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModelVersies($index)
    {
        unset($this->modelVersies[$index]);
    }

    /**
     * Gets as modelVersies
     *
     * @return int[]
     */
    public function getModelVersies()
    {
        return $this->modelVersies;
    }

    /**
     * Sets a new modelVersies
     *
     * @param int[] $modelVersies
     * @return self
     */
    public function setModelVersies(array $modelVersies = null)
    {
        $this->modelVersies = $modelVersies;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type = null)
    {
        $this->type = $type;
        return $this;
    }


}

