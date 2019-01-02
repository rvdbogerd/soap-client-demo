<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing SoftwareVersieType
 *
 *
 * XSD Type: SoftwareVersie
 */
class SoftwareVersieType
{

    /**
     * @property string $leverancier
     */
    private $leverancier = null;

    /**
     * @property string $pakketnaam
     */
    private $pakketnaam = null;

    /**
     * @property string $versie
     */
    private $versie = null;

    /**
     * Gets as leverancier
     *
     * @return string
     */
    public function getLeverancier()
    {
        return $this->leverancier;
    }

    /**
     * Sets a new leverancier
     *
     * @param string $leverancier
     * @return self
     */
    public function setLeverancier(string $leverancier = null)
    {
        $this->leverancier = $leverancier;
        return $this;
    }

    /**
     * Gets as pakketnaam
     *
     * @return string
     */
    public function getPakketnaam()
    {
        return $this->pakketnaam;
    }

    /**
     * Sets a new pakketnaam
     *
     * @param string $pakketnaam
     * @return self
     */
    public function setPakketnaam(string $pakketnaam = null)
    {
        $this->pakketnaam = $pakketnaam;
        return $this;
    }

    /**
     * Gets as versie
     *
     * @return string
     */
    public function getVersie()
    {
        return $this->versie;
    }

    /**
     * Sets a new versie
     *
     * @param string $versie
     * @return self
     */
    public function setVersie(string $versie = null)
    {
        $this->versie = $versie;
        return $this;
    }


}

