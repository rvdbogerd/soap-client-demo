<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

/**
 * Class representing ZaakDetailType
 *
 *
 * XSD Type: ZaakDetail
 */
class ZaakDetailType extends ZaakType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[] $betrokkenPersonen
     */
    private $betrokkenPersonen = null;

    /**
     * @property \DateTime $datumAanvang
     */
    private $datumAanvang = null;

    /**
     * @property \DateTime $datumEinde
     */
    private $datumEinde = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[] $detailGegevens
     */
    private $detailGegevens = null;

    /**
     * @property \ToezichtS2S\Model\Algemeen\v1\GerechtType $gerecht
     */
    private $gerecht = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[] $gerelateerdeZaken
     */
    private $gerelateerdeZaken = null;

    /**
     * Adds as betrokkenPersoon
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType $betrokkenPersoon
     */
    public function addToBetrokkenPersonen(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType $betrokkenPersoon)
    {
        $this->betrokkenPersonen[] = $betrokkenPersoon;
        return $this;
    }

    /**
     * isset betrokkenPersonen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBetrokkenPersonen($index)
    {
        return isset($this->betrokkenPersonen[$index]);
    }

    /**
     * unset betrokkenPersonen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBetrokkenPersonen($index)
    {
        unset($this->betrokkenPersonen[$index]);
    }

    /**
     * Gets as betrokkenPersonen
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[]
     */
    public function getBetrokkenPersonen()
    {
        return $this->betrokkenPersonen;
    }

    /**
     * Sets a new betrokkenPersonen
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\BetrokkenPersoonType[] $betrokkenPersonen
     * @return self
     */
    public function setBetrokkenPersonen(array $betrokkenPersonen = null)
    {
        $this->betrokkenPersonen = $betrokkenPersonen;
        return $this;
    }

    /**
     * Gets as datumAanvang
     *
     * @return \DateTime
     */
    public function getDatumAanvang()
    {
        return $this->datumAanvang;
    }

    /**
     * Sets a new datumAanvang
     *
     * @param \DateTime $datumAanvang
     * @return self
     */
    public function setDatumAanvang(\DateTime $datumAanvang = null)
    {
        $this->datumAanvang = $datumAanvang;
        return $this;
    }

    /**
     * Gets as datumEinde
     *
     * @return \DateTime
     */
    public function getDatumEinde()
    {
        return $this->datumEinde;
    }

    /**
     * Sets a new datumEinde
     *
     * @param \DateTime $datumEinde
     * @return self
     */
    public function setDatumEinde(\DateTime $datumEinde = null)
    {
        $this->datumEinde = $datumEinde;
        return $this;
    }

    /**
     * Adds as gegevensgroep
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType $gegevensgroep
     */
    public function addToDetailGegevens(\ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType $gegevensgroep)
    {
        $this->detailGegevens[] = $gegevensgroep;
        return $this;
    }

    /**
     * isset detailGegevens
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailGegevens($index)
    {
        return isset($this->detailGegevens[$index]);
    }

    /**
     * unset detailGegevens
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailGegevens($index)
    {
        unset($this->detailGegevens[$index]);
    }

    /**
     * Gets as detailGegevens
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[]
     */
    public function getDetailGegevens()
    {
        return $this->detailGegevens;
    }

    /**
     * Sets a new detailGegevens
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[] $detailGegevens
     * @return self
     */
    public function setDetailGegevens(array $detailGegevens = null)
    {
        $this->detailGegevens = $detailGegevens;
        return $this;
    }

    /**
     * Gets as gerecht
     *
     * @return \ToezichtS2S\Model\Algemeen\v1\GerechtType
     */
    public function getGerecht()
    {
        return $this->gerecht;
    }

    /**
     * Sets a new gerecht
     *
     * @param \ToezichtS2S\Model\Algemeen\v1\GerechtType $gerecht
     * @return self
     */
    public function setGerecht(\ToezichtS2S\Model\Algemeen\v1\GerechtType $gerecht = null)
    {
        $this->gerecht = $gerecht;
        return $this;
    }

    /**
     * Adds as gerelateerdeZaak
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType $gerelateerdeZaak
     */
    public function addToGerelateerdeZaken(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType $gerelateerdeZaak)
    {
        $this->gerelateerdeZaken[] = $gerelateerdeZaak;
        return $this;
    }

    /**
     * isset gerelateerdeZaken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGerelateerdeZaken($index)
    {
        return isset($this->gerelateerdeZaken[$index]);
    }

    /**
     * unset gerelateerdeZaken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGerelateerdeZaken($index)
    {
        unset($this->gerelateerdeZaken[$index]);
    }

    /**
     * Gets as gerelateerdeZaken
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[]
     */
    public function getGerelateerdeZaken()
    {
        return $this->gerelateerdeZaken;
    }

    /**
     * Sets a new gerelateerdeZaken
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakRelatieType[] $gerelateerdeZaken
     * @return self
     */
    public function setGerelateerdeZaken(array $gerelateerdeZaken = null)
    {
        $this->gerelateerdeZaken = $gerelateerdeZaken;
        return $this;
    }


}

