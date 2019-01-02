<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing ArrayOfRaadpleegFormulierType
 *
 *
 * XSD Type: ArrayOfRaadpleegFormulier
 */
class ArrayOfRaadpleegFormulierType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[] $raadpleegFormulier
     */
    private $raadpleegFormulier = [
        
    ];

    /**
     * Adds as raadpleegFormulier
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\RaadpleegFormulierType $raadpleegFormulier
     */
    public function addToRaadpleegFormulier(\ToezichtS2S\Formulier\v2\RaadpleegFormulierType $raadpleegFormulier)
    {
        $this->raadpleegFormulier[] = $raadpleegFormulier;
        return $this;
    }

    /**
     * isset raadpleegFormulier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRaadpleegFormulier($index)
    {
        return isset($this->raadpleegFormulier[$index]);
    }

    /**
     * unset raadpleegFormulier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRaadpleegFormulier($index)
    {
        unset($this->raadpleegFormulier[$index]);
    }

    /**
     * Gets as raadpleegFormulier
     *
     * @return \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[]
     */
    public function getRaadpleegFormulier()
    {
        return $this->raadpleegFormulier;
    }

    /**
     * Sets a new raadpleegFormulier
     *
     * @param \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[] $raadpleegFormulier
     * @return self
     */
    public function setRaadpleegFormulier(array $raadpleegFormulier = null)
    {
        $this->raadpleegFormulier = $raadpleegFormulier;
        return $this;
    }


}

