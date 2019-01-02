<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing PersoonDetailType
 *
 *
 * XSD Type: PersoonDetail
 */
class PersoonDetailType extends PersoonType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[] $adressen
     */
    private $adressen = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType[] $detailGegevens
     */
    private $detailGegevens = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[] $gerelateerdePersonen
     */
    private $gerelateerdePersonen = null;

    /**
     * @property string $persoonSoort
     */
    private $persoonSoort = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[] $registraties
     */
    private $registraties = null;

    /**
     * Adds as adres
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType $adres
     */
    public function addToAdressen(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType $adres)
    {
        $this->adressen[] = $adres;
        return $this;
    }

    /**
     * isset adressen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdressen($index)
    {
        return isset($this->adressen[$index]);
    }

    /**
     * unset adressen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdressen($index)
    {
        unset($this->adressen[$index]);
    }

    /**
     * Gets as adressen
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[]
     */
    public function getAdressen()
    {
        return $this->adressen;
    }

    /**
     * Sets a new adressen
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[] $adressen
     * @return self
     */
    public function setAdressen(array $adressen = null)
    {
        $this->adressen = $adressen;
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
     * Adds as gerelateerdePersoon
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType $gerelateerdePersoon
     */
    public function addToGerelateerdePersonen(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType $gerelateerdePersoon)
    {
        $this->gerelateerdePersonen[] = $gerelateerdePersoon;
        return $this;
    }

    /**
     * isset gerelateerdePersonen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGerelateerdePersonen($index)
    {
        return isset($this->gerelateerdePersonen[$index]);
    }

    /**
     * unset gerelateerdePersonen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGerelateerdePersonen($index)
    {
        unset($this->gerelateerdePersonen[$index]);
    }

    /**
     * Gets as gerelateerdePersonen
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[]
     */
    public function getGerelateerdePersonen()
    {
        return $this->gerelateerdePersonen;
    }

    /**
     * Sets a new gerelateerdePersonen
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GerelateerdePersoonType[] $gerelateerdePersonen
     * @return self
     */
    public function setGerelateerdePersonen(array $gerelateerdePersonen = null)
    {
        $this->gerelateerdePersonen = $gerelateerdePersonen;
        return $this;
    }

    /**
     * Gets as persoonSoort
     *
     * @return string
     */
    public function getPersoonSoort()
    {
        return $this->persoonSoort;
    }

    /**
     * Sets a new persoonSoort
     *
     * @param string $persoonSoort
     * @return self
     */
    public function setPersoonSoort(string $persoonSoort = null)
    {
        $this->persoonSoort = $persoonSoort;
        return $this;
    }

    /**
     * Adds as registratie
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType $registratie
     */
    public function addToRegistraties(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType $registratie)
    {
        $this->registraties[] = $registratie;
        return $this;
    }

    /**
     * isset registraties
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistraties($index)
    {
        return isset($this->registraties[$index]);
    }

    /**
     * unset registraties
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistraties($index)
    {
        unset($this->registraties[$index]);
    }

    /**
     * Gets as registraties
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[]
     */
    public function getRegistraties()
    {
        return $this->registraties;
    }

    /**
     * Sets a new registraties
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[] $registraties
     * @return self
     */
    public function setRegistraties(array $registraties = null)
    {
        $this->registraties = $registraties;
        return $this;
    }


}

