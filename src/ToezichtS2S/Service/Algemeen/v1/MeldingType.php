<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing MeldingType
 *
 *
 * XSD Type: Melding
 */
class MeldingType extends ExtensibleDataObjectType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $omschrijving
     */
    private $omschrijving = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode(string $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Sets a new omschrijving
     *
     * @param string $omschrijving
     * @return self
     */
    public function setOmschrijving(string $omschrijving = null)
    {
        $this->omschrijving = $omschrijving;
        return $this;
    }


}

