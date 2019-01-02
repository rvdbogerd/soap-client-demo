<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing NatuurlijkPersoonType
 *
 *
 * XSD Type: NatuurlijkPersoon
 */
class NatuurlijkPersoonType extends PersoonDetailType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AchternaamType $achternaam
     */
    private $achternaam = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GeboorteType $geboorte
     */
    private $geboorte = null;

    /**
     * @property string $geslacht
     */
    private $geslacht = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PartnernaamType $partnernaam
     */
    private $partnernaam = null;

    /**
     * @property string $voorletters
     */
    private $voorletters = null;

    /**
     * @property string $voornamen
     */
    private $voornamen = null;

    /**
     * Gets as achternaam
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AchternaamType
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Sets a new achternaam
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AchternaamType $achternaam
     * @return self
     */
    public function setAchternaam(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AchternaamType $achternaam = null)
    {
        $this->achternaam = $achternaam;
        return $this;
    }

    /**
     * Gets as geboorte
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GeboorteType
     */
    public function getGeboorte()
    {
        return $this->geboorte;
    }

    /**
     * Sets a new geboorte
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GeboorteType $geboorte
     * @return self
     */
    public function setGeboorte(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\GeboorteType $geboorte = null)
    {
        $this->geboorte = $geboorte;
        return $this;
    }

    /**
     * Gets as geslacht
     *
     * @return string
     */
    public function getGeslacht()
    {
        return $this->geslacht;
    }

    /**
     * Sets a new geslacht
     *
     * @param string $geslacht
     * @return self
     */
    public function setGeslacht(string $geslacht = null)
    {
        $this->geslacht = $geslacht;
        return $this;
    }

    /**
     * Gets as partnernaam
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PartnernaamType
     */
    public function getPartnernaam()
    {
        return $this->partnernaam;
    }

    /**
     * Sets a new partnernaam
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PartnernaamType $partnernaam
     * @return self
     */
    public function setPartnernaam(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PartnernaamType $partnernaam = null)
    {
        $this->partnernaam = $partnernaam;
        return $this;
    }

    /**
     * Gets as voorletters
     *
     * @return string
     */
    public function getVoorletters()
    {
        return $this->voorletters;
    }

    /**
     * Sets a new voorletters
     *
     * @param string $voorletters
     * @return self
     */
    public function setVoorletters(string $voorletters = null)
    {
        $this->voorletters = $voorletters;
        return $this;
    }

    /**
     * Gets as voornamen
     *
     * @return string
     */
    public function getVoornamen()
    {
        return $this->voornamen;
    }

    /**
     * Sets a new voornamen
     *
     * @param string $voornamen
     * @return self
     */
    public function setVoornamen(string $voornamen = null)
    {
        $this->voornamen = $voornamen;
        return $this;
    }


}

