<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing AntwoordType
 *
 *
 * XSD Type: Antwoord
 */
class AntwoordType extends ExtensibleDataObjectType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\AntwoordContextType $operatieContext
     */
    private $operatieContext = null;

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\VerwerkingsresultaatType $verwerkingsresultaat
     */
    private $verwerkingsresultaat = null;

    /**
     * Gets as operatieContext
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\AntwoordContextType
     */
    public function getOperatieContext()
    {
        return $this->operatieContext;
    }

    /**
     * Sets a new operatieContext
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\AntwoordContextType $operatieContext
     * @return self
     */
    public function setOperatieContext(\ToezichtS2S\Service\Algemeen\v1\AntwoordContextType $operatieContext = null)
    {
        $this->operatieContext = $operatieContext;
        return $this;
    }

    /**
     * Gets as verwerkingsresultaat
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\VerwerkingsresultaatType
     */
    public function getVerwerkingsresultaat()
    {
        return $this->verwerkingsresultaat;
    }

    /**
     * Sets a new verwerkingsresultaat
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\VerwerkingsresultaatType $verwerkingsresultaat
     * @return self
     */
    public function setVerwerkingsresultaat(\ToezichtS2S\Service\Algemeen\v1\VerwerkingsresultaatType $verwerkingsresultaat = null)
    {
        $this->verwerkingsresultaat = $verwerkingsresultaat;
        return $this;
    }


}

