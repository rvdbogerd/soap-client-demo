<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing PersoonReferentieType
 *
 *
 * XSD Type: PersoonReferentie
 */
class PersoonReferentieType extends PersoonType
{

    /**
     * @property int[] $modelVersies
     */
    private $modelVersies = null;

    /**
     * @property string $persoonSoort
     */
    private $persoonSoort = null;

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
     * Gets as persoonSoort
     *
     * @return string
     */
    public function getPersoonSoort()
    {
        return $this->persoonSoort;
    }

    /**
     * Sets a new persoonSoort
     *
     * @param string $persoonSoort
     * @return self
     */
    public function setPersoonSoort(string $persoonSoort = null)
    {
        $this->persoonSoort = $persoonSoort;
        return $this;
    }


}

