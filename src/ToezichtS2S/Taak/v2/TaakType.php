<?php

namespace ToezichtS2S\Taak\v2;

/**
 * Class representing TaakType
 *
 *
 * XSD Type: Taak
 */
class TaakType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieType[] $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property string $soort
     */
    private $soort = null;

    /**
     * Adds as objectReferentie
     *
     * @return self
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType $objectReferentie
     */
    public function addToBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectReferentieType $objectReferentie)
    {
        $this->behoortBij[] = $objectReferentie;
        return $this;
    }

    /**
     * isset behoortBij
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBehoortBij($index)
    {
        return isset($this->behoortBij[$index]);
    }

    /**
     * unset behoortBij
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBehoortBij($index)
    {
        unset($this->behoortBij[$index]);
    }

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectReferentieType[]
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType[] $behoortBij
     * @return self
     */
    public function setBehoortBij(array $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Gets as soort
     *
     * @return string
     */
    public function getSoort()
    {
        return $this->soort;
    }

    /**
     * Sets a new soort
     *
     * @param string $soort
     * @return self
     */
    public function setSoort(string $soort = null)
    {
        $this->soort = $soort;
        return $this;
    }


}

