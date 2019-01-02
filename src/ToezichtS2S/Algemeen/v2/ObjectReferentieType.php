<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ObjectReferentieType
 *
 *
 * XSD Type: ObjectReferentie
 */
class ObjectReferentieType extends ObjectIdentificatieEnType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerken
     */
    private $kenmerken = null;

    /**
     * @property int[] $mogelijkeModelVersies
     */
    private $mogelijkeModelVersies = null;

    /**
     * Adds as kenmerk
     *
     * @return self
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk
     */
    public function addToKenmerken(\ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk)
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
     * @return \ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType\KenmerkAType[]
     */
    public function getKenmerken()
    {
        return $this->kenmerken;
    }

    /**
     * Sets a new kenmerken
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerken
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
    public function addToMogelijkeModelVersies($modelVersie)
    {
        $this->mogelijkeModelVersies[] = $modelVersie;
        return $this;
    }

    /**
     * isset mogelijkeModelVersies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMogelijkeModelVersies($index)
    {
        return isset($this->mogelijkeModelVersies[$index]);
    }

    /**
     * unset mogelijkeModelVersies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMogelijkeModelVersies($index)
    {
        unset($this->mogelijkeModelVersies[$index]);
    }

    /**
     * Gets as mogelijkeModelVersies
     *
     * @return int[]
     */
    public function getMogelijkeModelVersies()
    {
        return $this->mogelijkeModelVersies;
    }

    /**
     * Sets a new mogelijkeModelVersies
     *
     * @param int[] $mogelijkeModelVersies
     * @return self
     */
    public function setMogelijkeModelVersies(array $mogelijkeModelVersies = null)
    {
        $this->mogelijkeModelVersies = $mogelijkeModelVersies;
        return $this;
    }


}

