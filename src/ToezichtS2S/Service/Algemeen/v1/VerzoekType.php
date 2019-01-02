<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing VerzoekType
 *
 *
 * XSD Type: Verzoek
 */
class VerzoekType extends ExtensibleDataObjectType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\VerzoekContextType $operatieContext
     */
    private $operatieContext = null;

    /**
     * Gets as operatieContext
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\VerzoekContextType
     */
    public function getOperatieContext()
    {
        return $this->operatieContext;
    }

    /**
     * Sets a new operatieContext
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\VerzoekContextType $operatieContext
     * @return self
     */
    public function setOperatieContext(\ToezichtS2S\Service\Algemeen\v1\VerzoekContextType $operatieContext = null)
    {
        $this->operatieContext = $operatieContext;
        return $this;
    }


}

