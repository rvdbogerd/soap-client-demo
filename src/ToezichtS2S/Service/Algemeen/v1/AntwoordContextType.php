<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing AntwoordContextType
 *
 *
 * XSD Type: AntwoordContext
 */
class AntwoordContextType extends ExtensibleDataObjectType
{

    /**
     * @property string $externeReferentie
     */
    private $externeReferentie = null;

    /**
     * Gets as externeReferentie
     *
     * @return string
     */
    public function getExterneReferentie()
    {
        return $this->externeReferentie;
    }

    /**
     * Sets a new externeReferentie
     *
     * @param string $externeReferentie
     * @return self
     */
    public function setExterneReferentie(string $externeReferentie = null)
    {
        $this->externeReferentie = $externeReferentie;
        return $this;
    }


}

