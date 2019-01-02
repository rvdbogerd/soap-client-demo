<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing GerelateerdePersonenType
 *
 *
 * XSD Type: GerelateerdePersonen
 */
class GerelateerdePersonenType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[] $gerelateerdePersoon
     */
    private $gerelateerdePersoon = [
        
    ];

    /**
     * Adds as gerelateerdePersoon
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType $gerelateerdePersoon
     */
    public function addToGerelateerdePersoon(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType $gerelateerdePersoon)
    {
        $this->gerelateerdePersoon[] = $gerelateerdePersoon;
        return $this;
    }

    /**
     * isset gerelateerdePersoon
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGerelateerdePersoon($index)
    {
        return isset($this->gerelateerdePersoon[$index]);
    }

    /**
     * unset gerelateerdePersoon
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGerelateerdePersoon($index)
    {
        unset($this->gerelateerdePersoon[$index]);
    }

    /**
     * Gets as gerelateerdePersoon
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[]
     */
    public function getGerelateerdePersoon()
    {
        return $this->gerelateerdePersoon;
    }

    /**
     * Sets a new gerelateerdePersoon
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[] $gerelateerdePersoon
     * @return self
     */
    public function setGerelateerdePersoon(array $gerelateerdePersoon = null)
    {
        $this->gerelateerdePersoon = $gerelateerdePersoon;
        return $this;
    }


}

