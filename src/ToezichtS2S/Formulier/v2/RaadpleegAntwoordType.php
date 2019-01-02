<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing RaadpleegAntwoordType
 *
 *
 * XSD Type: RaadpleegAntwoord
 */
class RaadpleegAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[] $formulieren
     */
    private $formulieren = null;

    /**
     * Adds as raadpleegFormulier
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\RaadpleegFormulierType $raadpleegFormulier
     */
    public function addToFormulieren(\ToezichtS2S\Formulier\v2\RaadpleegFormulierType $raadpleegFormulier)
    {
        $this->formulieren[] = $raadpleegFormulier;
        return $this;
    }

    /**
     * isset formulieren
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormulieren($index)
    {
        return isset($this->formulieren[$index]);
    }

    /**
     * unset formulieren
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormulieren($index)
    {
        unset($this->formulieren[$index]);
    }

    /**
     * Gets as formulieren
     *
     * @return \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[]
     */
    public function getFormulieren()
    {
        return $this->formulieren;
    }

    /**
     * Sets a new formulieren
     *
     * @param \ToezichtS2S\Formulier\v2\RaadpleegFormulierType[] $formulieren
     * @return self
     */
    public function setFormulieren(array $formulieren = null)
    {
        $this->formulieren = $formulieren;
        return $this;
    }


}

