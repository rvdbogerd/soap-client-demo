<?php

namespace ToezichtS2S\Service\Formulieren\v1;

use ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType;

/**
 * Class representing HaalOpVerzoekType
 *
 *
 * XSD Type: HaalOpVerzoek
 */
class HaalOpVerzoekType extends StandaardHaalOpVerzoekType
{

    /**
     * @property string $formulierSjabloon
     */
    private $formulierSjabloon = null;

    /**
     * @property string[] $gegevens
     */
    private $gegevens = null;

    /**
     * @property bool $indicatieExclusiefInvoer
     */
    private $indicatieExclusiefInvoer = null;

    /**
     * @property bool $indicatieInclusiefBijlagen
     */
    private $indicatieInclusiefBijlagen = null;

    /**
     * Gets as formulierSjabloon
     *
     * @return string
     */
    public function getFormulierSjabloon()
    {
        return $this->formulierSjabloon;
    }

    /**
     * Sets a new formulierSjabloon
     *
     * @param string $formulierSjabloon
     * @return self
     */
    public function setFormulierSjabloon(string $formulierSjabloon = null)
    {
        $this->formulierSjabloon = $formulierSjabloon;
        return $this;
    }

    /**
     * Adds as identificatie
     *
     * @return self
     * @param string $identificatie
     */
    public function addToGegevens($identificatie)
    {
        $this->gegevens[] = $identificatie;
        return $this;
    }

    /**
     * isset gegevens
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGegevens($index)
    {
        return isset($this->gegevens[$index]);
    }

    /**
     * unset gegevens
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGegevens($index)
    {
        unset($this->gegevens[$index]);
    }

    /**
     * Gets as gegevens
     *
     * @return string[]
     */
    public function getGegevens()
    {
        return $this->gegevens;
    }

    /**
     * Sets a new gegevens
     *
     * @param string $gegevens
     * @return self
     */
    public function setGegevens(array $gegevens = null)
    {
        $this->gegevens = $gegevens;
        return $this;
    }

    /**
     * Gets as indicatieExclusiefInvoer
     *
     * @return bool
     */
    public function getIndicatieExclusiefInvoer()
    {
        return $this->indicatieExclusiefInvoer;
    }

    /**
     * Sets a new indicatieExclusiefInvoer
     *
     * @param bool $indicatieExclusiefInvoer
     * @return self
     */
    public function setIndicatieExclusiefInvoer(bool $indicatieExclusiefInvoer = null)
    {
        $this->indicatieExclusiefInvoer = $indicatieExclusiefInvoer;
        return $this;
    }

    /**
     * Gets as indicatieInclusiefBijlagen
     *
     * @return bool
     */
    public function getIndicatieInclusiefBijlagen()
    {
        return $this->indicatieInclusiefBijlagen;
    }

    /**
     * Sets a new indicatieInclusiefBijlagen
     *
     * @param bool $indicatieInclusiefBijlagen
     * @return self
     */
    public function setIndicatieInclusiefBijlagen(bool $indicatieInclusiefBijlagen = null)
    {
        $this->indicatieInclusiefBijlagen = $indicatieInclusiefBijlagen;
        return $this;
    }


}

