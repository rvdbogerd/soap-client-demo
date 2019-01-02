<?php

namespace ToezichtS2S\Model\Algemeen\v1;

/**
 * Class representing ModelVersiesType
 *
 *
 * XSD Type: ModelVersies
 */
class ModelVersiesType
{

    /**
     * @property int[] $modelVersie
     */
    private $modelVersie = [
        
    ];

    /**
     * Adds as modelVersie
     *
     * @return self
     * @param int $modelVersie
     */
    public function addToModelVersie($modelVersie)
    {
        $this->modelVersie[] = $modelVersie;
        return $this;
    }

    /**
     * isset modelVersie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModelVersie($index)
    {
        return isset($this->modelVersie[$index]);
    }

    /**
     * unset modelVersie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModelVersie($index)
    {
        unset($this->modelVersie[$index]);
    }

    /**
     * Gets as modelVersie
     *
     * @return int[]
     */
    public function getModelVersie()
    {
        return $this->modelVersie;
    }

    /**
     * Sets a new modelVersie
     *
     * @param int[] $modelVersie
     * @return self
     */
    public function setModelVersie(array $modelVersie = null)
    {
        $this->modelVersie = $modelVersie;
        return $this;
    }


}

