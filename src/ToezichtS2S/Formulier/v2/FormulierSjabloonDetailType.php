<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType;

/**
 * Class representing FormulierSjabloonDetailType
 *
 *
 * XSD Type: FormulierSjabloonDetail
 */
class FormulierSjabloonDetailType extends ObjectIdentificatieEnVersieType
{

    /**
     * @property string $soortFormulier
     */
    private $soortFormulier = null;

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


}

