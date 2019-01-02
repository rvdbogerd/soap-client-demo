<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing AntwoordContextType
 *
 *
 * XSD Type: AntwoordContext
 */
class AntwoordContextType
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

