<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Model\Algemeen\v1\ObjectIdentificatieType;

/**
 * Class representing PersoonType
 *
 *
 * XSD Type: Persoon
 */
class PersoonType extends ObjectIdentificatieType
{

    /**
     * @property string $register
     */
    private $register = null;

    /**
     * Gets as register
     *
     * @return string
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Sets a new register
     *
     * @param string $register
     * @return self
     */
    public function setRegister(string $register = null)
    {
        $this->register = $register;
        return $this;
    }


}

