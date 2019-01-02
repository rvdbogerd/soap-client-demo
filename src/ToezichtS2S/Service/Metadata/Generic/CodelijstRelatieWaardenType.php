<?php

namespace ToezichtS2S\Service\Metadata\Generic;

/**
 * Class representing CodelijstRelatieWaardenType
 *
 *
 * XSD Type: CodelijstRelatieWaarden
 */
class CodelijstRelatieWaardenType
{

    /**
     * @property \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[] $codelijstRelatieWaarde
     */
    private $codelijstRelatieWaarde = [
        
    ];

    /**
     * Adds as codelijstRelatieWaarde
     *
     * @return self
     * @param \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType $codelijstRelatieWaarde
     */
    public function addToCodelijstRelatieWaarde(\ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType $codelijstRelatieWaarde)
    {
        $this->codelijstRelatieWaarde[] = $codelijstRelatieWaarde;
        return $this;
    }

    /**
     * isset codelijstRelatieWaarde
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodelijstRelatieWaarde($index)
    {
        return isset($this->codelijstRelatieWaarde[$index]);
    }

    /**
     * unset codelijstRelatieWaarde
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodelijstRelatieWaarde($index)
    {
        unset($this->codelijstRelatieWaarde[$index]);
    }

    /**
     * Gets as codelijstRelatieWaarde
     *
     * @return \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[]
     */
    public function getCodelijstRelatieWaarde()
    {
        return $this->codelijstRelatieWaarde;
    }

    /**
     * Sets a new codelijstRelatieWaarde
     *
     * @param \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[] $codelijstRelatieWaarde
     * @return self
     */
    public function setCodelijstRelatieWaarde(array $codelijstRelatieWaarde = null)
    {
        $this->codelijstRelatieWaarde = $codelijstRelatieWaarde;
        return $this;
    }


}

