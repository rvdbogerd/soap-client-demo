<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\ObjectIdentificatieType;

/**
 * Class representing FormulierSjabloonReferentieType
 *
 *
 * XSD Type: FormulierSjabloonReferentie
 */
class FormulierSjabloonReferentieType extends ObjectIdentificatieType
{

    /**
     * @property string $soortFormulier
     */
    private $soortFormulier = null;

    /**
     * @property int[] $mogelijkeModelVersies
     */
    private $mogelijkeModelVersies = null;

    /**
     * Gets as soortFormulier
     *
     * @return string
     */
    public function getSoortFormulier()
    {
        return $this->soortFormulier;
    }

    /**
     * Sets a new soortFormulier
     *
     * @param string $soortFormulier
     * @return self
     */
    public function setSoortFormulier(string $soortFormulier = null)
    {
        $this->soortFormulier = $soortFormulier;
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

