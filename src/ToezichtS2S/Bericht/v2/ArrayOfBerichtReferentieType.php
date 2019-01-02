<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing ArrayOfBerichtReferentieType
 *
 *
 * XSD Type: ArrayOfBerichtReferentie
 */
class ArrayOfBerichtReferentieType
{

    /**
     * @property \ToezichtS2S\Bericht\v2\BerichtReferentieType[] $berichtReferentie
     */
    private $berichtReferentie = [
        
    ];

    /**
     * Adds as berichtReferentie
     *
     * @return self
     * @param \ToezichtS2S\Bericht\v2\BerichtReferentieType $berichtReferentie
     */
    public function addToBerichtReferentie(\ToezichtS2S\Bericht\v2\BerichtReferentieType $berichtReferentie)
    {
        $this->berichtReferentie[] = $berichtReferentie;
        return $this;
    }

    /**
     * isset berichtReferentie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBerichtReferentie($index)
    {
        return isset($this->berichtReferentie[$index]);
    }

    /**
     * unset berichtReferentie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBerichtReferentie($index)
    {
        unset($this->berichtReferentie[$index]);
    }

    /**
     * Gets as berichtReferentie
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtReferentieType[]
     */
    public function getBerichtReferentie()
    {
        return $this->berichtReferentie;
    }

    /**
     * Sets a new berichtReferentie
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtReferentieType[] $berichtReferentie
     * @return self
     */
    public function setBerichtReferentie(array $berichtReferentie = null)
    {
        $this->berichtReferentie = $berichtReferentie;
        return $this;
    }


}

