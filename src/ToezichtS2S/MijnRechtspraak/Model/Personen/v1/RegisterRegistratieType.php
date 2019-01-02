<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing RegisterRegistratieType
 *
 *
 * XSD Type: RegisterRegistratie
 */
class RegisterRegistratieType extends ExtensibleDataObjectType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property string $register
     */
    private $register = null;

    /**
     * Gets as identificatie
     *
     * @return string
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(string $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }

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

