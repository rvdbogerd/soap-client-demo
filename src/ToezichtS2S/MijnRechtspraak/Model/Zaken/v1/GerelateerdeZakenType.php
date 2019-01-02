<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

/**
 * Class representing GerelateerdeZakenType
 *
 *
 * XSD Type: GerelateerdeZaken
 */
class GerelateerdeZakenType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[] $gerelateerdeZaak
     */
    private $gerelateerdeZaak = [
        
    ];

    /**
     * Adds as gerelateerdeZaak
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType $gerelateerdeZaak
     */
    public function addToGerelateerdeZaak(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType $gerelateerdeZaak)
    {
        $this->gerelateerdeZaak[] = $gerelateerdeZaak;
        return $this;
    }

    /**
     * isset gerelateerdeZaak
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGerelateerdeZaak($index)
    {
        return isset($this->gerelateerdeZaak[$index]);
    }

    /**
     * unset gerelateerdeZaak
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGerelateerdeZaak($index)
    {
        unset($this->gerelateerdeZaak[$index]);
    }

    /**
     * Gets as gerelateerdeZaak
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[]
     */
    public function getGerelateerdeZaak()
    {
        return $this->gerelateerdeZaak;
    }

    /**
     * Sets a new gerelateerdeZaak
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[] $gerelateerdeZaak
     * @return self
     */
    public function setGerelateerdeZaak(array $gerelateerdeZaak = null)
    {
        $this->gerelateerdeZaak = $gerelateerdeZaak;
        return $this;
    }


}

