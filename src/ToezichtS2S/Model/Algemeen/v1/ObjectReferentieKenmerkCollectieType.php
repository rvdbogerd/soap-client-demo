<?php

namespace ToezichtS2S\Model\Algemeen\v1;

/**
 * Class representing ObjectReferentieKenmerkCollectieType
 *
 *
 * XSD Type: ObjectReferentie.KenmerkCollectie
 */
class ObjectReferentieKenmerkCollectieType
{

    /**
     * @property \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerk
     */
    private $kenmerk = [
        
    ];

    /**
     * Adds as kenmerk
     *
     * @return self
     * @param \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk
     */
    public function addToKenmerk(\ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType $kenmerk)
    {
        $this->kenmerk[] = $kenmerk;
        return $this;
    }

    /**
     * isset kenmerk
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKenmerk($index)
    {
        return isset($this->kenmerk[$index]);
    }

    /**
     * unset kenmerk
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKenmerk($index)
    {
        unset($this->kenmerk[$index]);
    }

    /**
     * Gets as kenmerk
     *
     * @return \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[]
     */
    public function getKenmerk()
    {
        return $this->kenmerk;
    }

    /**
     * Sets a new kenmerk
     *
     * @param \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieKenmerkCollectieType\KenmerkAType[] $kenmerk
     * @return self
     */
    public function setKenmerk(array $kenmerk = null)
    {
        $this->kenmerk = $kenmerk;
        return $this;
    }


}

