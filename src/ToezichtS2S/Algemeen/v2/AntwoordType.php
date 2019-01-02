<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing AntwoordType
 *
 *
 * XSD Type: Antwoord
 */
class AntwoordType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\AntwoordContextType $operatieContext
     */
    private $operatieContext = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\VerwerkingsresultaatType $verwerkingsresultaat
     */
    private $verwerkingsresultaat = null;

    /**
     * Gets as operatieContext
     *
     * @return \ToezichtS2S\Algemeen\v2\AntwoordContextType
     */
    public function getOperatieContext()
    {
        return $this->operatieContext;
    }

    /**
     * Sets a new operatieContext
     *
     * @param \ToezichtS2S\Algemeen\v2\AntwoordContextType $operatieContext
     * @return self
     */
    public function setOperatieContext(\ToezichtS2S\Algemeen\v2\AntwoordContextType $operatieContext = null)
    {
        $this->operatieContext = $operatieContext;
        return $this;
    }

    /**
     * Gets as verwerkingsresultaat
     *
     * @return \ToezichtS2S\Algemeen\v2\VerwerkingsresultaatType
     */
    public function getVerwerkingsresultaat()
    {
        return $this->verwerkingsresultaat;
    }

    /**
     * Sets a new verwerkingsresultaat
     *
     * @param \ToezichtS2S\Algemeen\v2\VerwerkingsresultaatType $verwerkingsresultaat
     * @return self
     */
    public function setVerwerkingsresultaat(\ToezichtS2S\Algemeen\v2\VerwerkingsresultaatType $verwerkingsresultaat = null)
    {
        $this->verwerkingsresultaat = $verwerkingsresultaat;
        return $this;
    }


}

