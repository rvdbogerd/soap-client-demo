<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

/**
 * Class representing ZaakReferentieType
 *
 *
 * XSD Type: ZaakReferentie
 */
class ZaakReferentieType extends ZaakType
{

    /**
     * @property int[] $modelVersies
     */
    private $modelVersies = null;

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


}

