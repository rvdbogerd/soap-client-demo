<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing VerzoekType
 *
 *
 * XSD Type: Verzoek
 */
class VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\VerzoekContextType $operatieContext
     */
    private $operatieContext = null;

    /**
     * Gets as operatieContext
     *
     * @return \ToezichtS2S\Algemeen\v2\VerzoekContextType
     */
    public function getOperatieContext()
    {
        return $this->operatieContext;
    }

    /**
     * Sets a new operatieContext
     *
     * @param \ToezichtS2S\Algemeen\v2\VerzoekContextType $operatieContext
     * @return self
     */
    public function setOperatieContext(\ToezichtS2S\Algemeen\v2\VerzoekContextType $operatieContext = null)
    {
        $this->operatieContext = $operatieContext;
        return $this;
    }


}

