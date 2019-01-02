<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\BerichtMeldingType;

/**
 * Class representing ValidatieMeldingType
 *
 *
 * XSD Type: ValidatieMelding
 */
class ValidatieMeldingType extends BerichtMeldingType
{

    /**
     * @property string $gegeven
     */
    private $gegeven = null;

    /**
     * @property int $regelnummer
     */
    private $regelnummer = null;

    /**
     * Gets as gegeven
     *
     * @return string
     */
    public function getGegeven()
    {
        return $this->gegeven;
    }

    /**
     * Sets a new gegeven
     *
     * @param string $gegeven
     * @return self
     */
    public function setGegeven(string $gegeven = null)
    {
        $this->gegeven = $gegeven;
        return $this;
    }

    /**
     * Gets as regelnummer
     *
     * @return int
     */
    public function getRegelnummer()
    {
        return $this->regelnummer;
    }

    /**
     * Sets a new regelnummer
     *
     * @param int $regelnummer
     * @return self
     */
    public function setRegelnummer(int $regelnummer = null)
    {
        $this->regelnummer = $regelnummer;
        return $this;
    }


}

