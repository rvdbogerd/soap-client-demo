<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing ArrayOfFormulierSjabloonIdentificatieType
 *
 *
 * XSD Type: ArrayOfFormulierSjabloonIdentificatie
 */
class ArrayOfFormulierSjabloonIdentificatieType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[] $formulierSjabloonIdentificatie
     */
    private $formulierSjabloonIdentificatie = [
        
    ];

    /**
     * Adds as formulierSjabloonIdentificatie
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType $formulierSjabloonIdentificatie
     */
    public function addToFormulierSjabloonIdentificatie(\ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType $formulierSjabloonIdentificatie)
    {
        $this->formulierSjabloonIdentificatie[] = $formulierSjabloonIdentificatie;
        return $this;
    }

    /**
     * isset formulierSjabloonIdentificatie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormulierSjabloonIdentificatie($index)
    {
        return isset($this->formulierSjabloonIdentificatie[$index]);
    }

    /**
     * unset formulierSjabloonIdentificatie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormulierSjabloonIdentificatie($index)
    {
        unset($this->formulierSjabloonIdentificatie[$index]);
    }

    /**
     * Gets as formulierSjabloonIdentificatie
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[]
     */
    public function getFormulierSjabloonIdentificatie()
    {
        return $this->formulierSjabloonIdentificatie;
    }

    /**
     * Sets a new formulierSjabloonIdentificatie
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[] $formulierSjabloonIdentificatie
     * @return self
     */
    public function setFormulierSjabloonIdentificatie(array $formulierSjabloonIdentificatie = null)
    {
        $this->formulierSjabloonIdentificatie = $formulierSjabloonIdentificatie;
        return $this;
    }


}

