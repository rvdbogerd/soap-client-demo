<?php

namespace ToezichtS2S\Service\Metadata\Generic;

/**
 * Class representing CodelijstWaardenType
 *
 *
 * XSD Type: CodelijstWaarden
 */
class CodelijstWaardenType
{

    /**
     * @property \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[] $codelijstWaarde
     */
    private $codelijstWaarde = [
        
    ];

    /**
     * Adds as codelijstWaarde
     *
     * @return self
     * @param \ToezichtS2S\Service\DataTypes\CodelijstWaardeType $codelijstWaarde
     */
    public function addToCodelijstWaarde(\ToezichtS2S\Service\DataTypes\CodelijstWaardeType $codelijstWaarde)
    {
        $this->codelijstWaarde[] = $codelijstWaarde;
        return $this;
    }

    /**
     * isset codelijstWaarde
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodelijstWaarde($index)
    {
        return isset($this->codelijstWaarde[$index]);
    }

    /**
     * unset codelijstWaarde
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodelijstWaarde($index)
    {
        unset($this->codelijstWaarde[$index]);
    }

    /**
     * Gets as codelijstWaarde
     *
     * @return \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[]
     */
    public function getCodelijstWaarde()
    {
        return $this->codelijstWaarde;
    }

    /**
     * Sets a new codelijstWaarde
     *
     * @param \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[] $codelijstWaarde
     * @return self
     */
    public function setCodelijstWaarde(array $codelijstWaarde = null)
    {
        $this->codelijstWaarde = $codelijstWaarde;
        return $this;
    }


}

