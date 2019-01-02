<?php

namespace ToezichtS2S\Service\Metadata\v1;

use ToezichtS2S\Service\Algemeen\v1\AntwoordType;

/**
 * Class representing RaadpleegCodelijstAntwoordType
 *
 *
 * XSD Type: RaadpleegCodelijstAntwoord
 */
class RaadpleegCodelijstAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[] $waarden
     */
    private $waarden = null;

    /**
     * Adds as codelijstWaarde
     *
     * @return self
     * @param \ToezichtS2S\Service\DataTypes\CodelijstWaardeType $codelijstWaarde
     */
    public function addToWaarden(\ToezichtS2S\Service\DataTypes\CodelijstWaardeType $codelijstWaarde)
    {
        $this->waarden[] = $codelijstWaarde;
        return $this;
    }

    /**
     * isset waarden
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWaarden($index)
    {
        return isset($this->waarden[$index]);
    }

    /**
     * unset waarden
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWaarden($index)
    {
        unset($this->waarden[$index]);
    }

    /**
     * Gets as waarden
     *
     * @return \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[]
     */
    public function getWaarden()
    {
        return $this->waarden;
    }

    /**
     * Sets a new waarden
     *
     * @param \ToezichtS2S\Service\DataTypes\CodelijstWaardeType[] $waarden
     * @return self
     */
    public function setWaarden(array $waarden = null)
    {
        $this->waarden = $waarden;
        return $this;
    }


}

