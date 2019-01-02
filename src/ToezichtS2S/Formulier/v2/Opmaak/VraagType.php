<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing VraagType
 *
 *
 * XSD Type: Vraag
 */
class VraagType extends ElementType
{

    /**
     * @property string $eenheidAchtervoegsel
     */
    private $eenheidAchtervoegsel = null;

    /**
     * @property string $eenheidVoorvoegsel
     */
    private $eenheidVoorvoegsel = null;

    /**
     * @property string $gegevenIdentificatie
     */
    private $gegevenIdentificatie = null;

    /**
     * @property string $tekst
     */
    private $tekst = null;

    /**
     * @property string $toelichting
     */
    private $toelichting = null;

    /**
     * Gets as eenheidAchtervoegsel
     *
     * @return string
     */
    public function getEenheidAchtervoegsel()
    {
        return $this->eenheidAchtervoegsel;
    }

    /**
     * Sets a new eenheidAchtervoegsel
     *
     * @param string $eenheidAchtervoegsel
     * @return self
     */
    public function setEenheidAchtervoegsel(string $eenheidAchtervoegsel = null)
    {
        $this->eenheidAchtervoegsel = $eenheidAchtervoegsel;
        return $this;
    }

    /**
     * Gets as eenheidVoorvoegsel
     *
     * @return string
     */
    public function getEenheidVoorvoegsel()
    {
        return $this->eenheidVoorvoegsel;
    }

    /**
     * Sets a new eenheidVoorvoegsel
     *
     * @param string $eenheidVoorvoegsel
     * @return self
     */
    public function setEenheidVoorvoegsel(string $eenheidVoorvoegsel = null)
    {
        $this->eenheidVoorvoegsel = $eenheidVoorvoegsel;
        return $this;
    }

    /**
     * Gets as gegevenIdentificatie
     *
     * @return string
     */
    public function getGegevenIdentificatie()
    {
        return $this->gegevenIdentificatie;
    }

    /**
     * Sets a new gegevenIdentificatie
     *
     * @param string $gegevenIdentificatie
     * @return self
     */
    public function setGegevenIdentificatie(string $gegevenIdentificatie = null)
    {
        $this->gegevenIdentificatie = $gegevenIdentificatie;
        return $this;
    }

    /**
     * Gets as tekst
     *
     * @return string
     */
    public function getTekst()
    {
        return $this->tekst;
    }

    /**
     * Sets a new tekst
     *
     * @param string $tekst
     * @return self
     */
    public function setTekst(string $tekst = null)
    {
        $this->tekst = $tekst;
        return $this;
    }

    /**
     * Gets as toelichting
     *
     * @return string
     */
    public function getToelichting()
    {
        return $this->toelichting;
    }

    /**
     * Sets a new toelichting
     *
     * @param string $toelichting
     * @return self
     */
    public function setToelichting(string $toelichting = null)
    {
        $this->toelichting = $toelichting;
        return $this;
    }


}

