<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing AdressenType
 *
 *
 * XSD Type: Adressen
 */
class AdressenType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[] $adres
     */
    private $adres = [
        
    ];

    /**
     * Adds as adres
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType $adres
     */
    public function addToAdres(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType $adres)
    {
        $this->adres[] = $adres;
        return $this;
    }

    /**
     * isset adres
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdres($index)
    {
        return isset($this->adres[$index]);
    }

    /**
     * unset adres
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdres($index)
    {
        unset($this->adres[$index]);
    }

    /**
     * Gets as adres
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[]
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\AdresType[] $adres
     * @return self
     */
    public function setAdres(array $adres = null)
    {
        $this->adres = $adres;
        return $this;
    }


}

