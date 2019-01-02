<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

/**
 * Class representing BetrokkenPersonenType
 *
 *
 * XSD Type: BetrokkenPersonen
 */
class BetrokkenPersonenType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[] $betrokkenPersoon
     */
    private $betrokkenPersoon = [
        
    ];

    /**
     * Adds as betrokkenPersoon
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType $betrokkenPersoon
     */
    public function addToBetrokkenPersoon(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType $betrokkenPersoon)
    {
        $this->betrokkenPersoon[] = $betrokkenPersoon;
        return $this;
    }

    /**
     * isset betrokkenPersoon
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBetrokkenPersoon($index)
    {
        return isset($this->betrokkenPersoon[$index]);
    }

    /**
     * unset betrokkenPersoon
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBetrokkenPersoon($index)
    {
        unset($this->betrokkenPersoon[$index]);
    }

    /**
     * Gets as betrokkenPersoon
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[]
     */
    public function getBetrokkenPersoon()
    {
        return $this->betrokkenPersoon;
    }

    /**
     * Sets a new betrokkenPersoon
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[] $betrokkenPersoon
     * @return self
     */
    public function setBetrokkenPersoon(array $betrokkenPersoon = null)
    {
        $this->betrokkenPersoon = $betrokkenPersoon;
        return $this;
    }


}

