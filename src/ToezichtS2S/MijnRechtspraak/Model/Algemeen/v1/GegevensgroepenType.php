<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1;

/**
 * Class representing GegevensgroepenType
 *
 *
 * XSD Type: Gegevensgroepen
 */
class GegevensgroepenType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[] $gegevensgroep
     */
    private $gegevensgroep = [
        
    ];

    /**
     * Adds as gegevensgroep
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType $gegevensgroep
     */
    public function addToGegevensgroep(\ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType $gegevensgroep)
    {
        $this->gegevensgroep[] = $gegevensgroep;
        return $this;
    }

    /**
     * isset gegevensgroep
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGegevensgroep($index)
    {
        return isset($this->gegevensgroep[$index]);
    }

    /**
     * unset gegevensgroep
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGegevensgroep($index)
    {
        unset($this->gegevensgroep[$index]);
    }

    /**
     * Gets as gegevensgroep
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[]
     */
    public function getGegevensgroep()
    {
        return $this->gegevensgroep;
    }

    /**
     * Sets a new gegevensgroep
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[] $gegevensgroep
     * @return self
     */
    public function setGegevensgroep(array $gegevensgroep = null)
    {
        $this->gegevensgroep = $gegevensgroep;
        return $this;
    }


}

