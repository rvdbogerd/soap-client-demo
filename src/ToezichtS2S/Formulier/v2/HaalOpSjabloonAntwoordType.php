<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing HaalOpSjabloonAntwoordType
 *
 *
 * XSD Type: HaalOpSjabloonAntwoord
 */
class HaalOpSjabloonAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierSjabloonSpecificatieType $formulierSjabloon
     */
    private $formulierSjabloon = null;

    /**
     * Gets as formulierSjabloon
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierSjabloonSpecificatieType
     */
    public function getFormulierSjabloon()
    {
        return $this->formulierSjabloon;
    }

    /**
     * Sets a new formulierSjabloon
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonSpecificatieType $formulierSjabloon
     * @return self
     */
    public function setFormulierSjabloon(\ToezichtS2S\Formulier\v2\FormulierSjabloonSpecificatieType $formulierSjabloon = null)
    {
        $this->formulierSjabloon = $formulierSjabloon;
        return $this;
    }


}

