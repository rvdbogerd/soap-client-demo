<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing HaalOpAntwoordType
 *
 *
 * XSD Type: HaalOpAntwoord
 */
class HaalOpAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierSjabloonReferentieType $sjabloon
     */
    private $sjabloon = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierDetailType $formulier
     */
    private $formulier = null;

    /**
     * Gets as sjabloon
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierSjabloonReferentieType
     */
    public function getSjabloon()
    {
        return $this->sjabloon;
    }

    /**
     * Sets a new sjabloon
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonReferentieType $sjabloon
     * @return self
     */
    public function setSjabloon(\ToezichtS2S\Formulier\v2\FormulierSjabloonReferentieType $sjabloon = null)
    {
        $this->sjabloon = $sjabloon;
        return $this;
    }

    /**
     * Gets as formulier
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierDetailType
     */
    public function getFormulier()
    {
        return $this->formulier;
    }

    /**
     * Sets a new formulier
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierDetailType $formulier
     * @return self
     */
    public function setFormulier(\ToezichtS2S\Formulier\v2\FormulierDetailType $formulier = null)
    {
        $this->formulier = $formulier;
        return $this;
    }


}

