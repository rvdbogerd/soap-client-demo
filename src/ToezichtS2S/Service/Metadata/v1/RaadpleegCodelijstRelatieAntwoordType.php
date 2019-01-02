<?php

namespace ToezichtS2S\Service\Metadata\v1;

use ToezichtS2S\Service\Algemeen\v1\AntwoordType;

/**
 * Class representing RaadpleegCodelijstRelatieAntwoordType
 *
 *
 * XSD Type: RaadpleegCodelijstRelatieAntwoord
 */
class RaadpleegCodelijstRelatieAntwoordType extends AntwoordType
{

    /**
     * @property string $identificatie1
     */
    private $identificatie1 = null;

    /**
     * @property string $identificatie2
     */
    private $identificatie2 = null;

    /**
     * @property \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[] $waarden
     */
    private $waarden = null;

    /**
     * Gets as identificatie1
     *
     * @return string
     */
    public function getIdentificatie1()
    {
        return $this->identificatie1;
    }

    /**
     * Sets a new identificatie1
     *
     * @param string $identificatie1
     * @return self
     */
    public function setIdentificatie1(string $identificatie1 = null)
    {
        $this->identificatie1 = $identificatie1;
        return $this;
    }

    /**
     * Gets as identificatie2
     *
     * @return string
     */
    public function getIdentificatie2()
    {
        return $this->identificatie2;
    }

    /**
     * Sets a new identificatie2
     *
     * @param string $identificatie2
     * @return self
     */
    public function setIdentificatie2(string $identificatie2 = null)
    {
        $this->identificatie2 = $identificatie2;
        return $this;
    }

    /**
     * Adds as codelijstRelatieWaarde
     *
     * @return self
     * @param \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType $codelijstRelatieWaarde
     */
    public function addToWaarden(\ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType $codelijstRelatieWaarde)
    {
        $this->waarden[] = $codelijstRelatieWaarde;
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
     * @return \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[]
     */
    public function getWaarden()
    {
        return $this->waarden;
    }

    /**
     * Sets a new waarden
     *
     * @param \ToezichtS2S\Service\DataTypes\CodelijstRelatieWaardeType[] $waarden
     * @return self
     */
    public function setWaarden(array $waarden = null)
    {
        $this->waarden = $waarden;
        return $this;
    }


}

