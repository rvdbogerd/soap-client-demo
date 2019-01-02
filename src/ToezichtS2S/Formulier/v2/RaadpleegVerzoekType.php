<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing RaadpleegVerzoekType
 *
 *
 * XSD Type: RaadpleegVerzoek
 */
class RaadpleegVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property string[] $formulierSoort
     */
    private $formulierSoort = null;

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     * @return self
     */
    public function setBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Adds as identificatieCode
     *
     * @return self
     * @param string $identificatieCode
     */
    public function addToFormulierSoort($identificatieCode)
    {
        $this->formulierSoort[] = $identificatieCode;
        return $this;
    }

    /**
     * isset formulierSoort
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormulierSoort($index)
    {
        return isset($this->formulierSoort[$index]);
    }

    /**
     * unset formulierSoort
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormulierSoort($index)
    {
        unset($this->formulierSoort[$index]);
    }

    /**
     * Gets as formulierSoort
     *
     * @return string[]
     */
    public function getFormulierSoort()
    {
        return $this->formulierSoort;
    }

    /**
     * Sets a new formulierSoort
     *
     * @param string $formulierSoort
     * @return self
     */
    public function setFormulierSoort(array $formulierSoort = null)
    {
        $this->formulierSoort = $formulierSoort;
        return $this;
    }


}

