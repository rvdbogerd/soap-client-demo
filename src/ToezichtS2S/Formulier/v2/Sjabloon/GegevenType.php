<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing GegevenType
 *
 *
 * XSD Type: Gegeven
 */
class GegevenType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property bool $indicatieAlleenLezen
     */
    private $indicatieAlleenLezen = null;

    /**
     * @property bool $indicatieExtraValidatie
     */
    private $indicatieExtraValidatie = null;

    /**
     * @property bool $indicatieRelevant
     */
    private $indicatieRelevant = null;

    /**
     * @property bool $indicatieVerplicht
     */
    private $indicatieVerplicht = null;

    /**
     * Gets as identificatie
     *
     * @return string
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(string $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }

    /**
     * Gets as indicatieAlleenLezen
     *
     * @return bool
     */
    public function getIndicatieAlleenLezen()
    {
        return $this->indicatieAlleenLezen;
    }

    /**
     * Sets a new indicatieAlleenLezen
     *
     * @param bool $indicatieAlleenLezen
     * @return self
     */
    public function setIndicatieAlleenLezen(bool $indicatieAlleenLezen = null)
    {
        $this->indicatieAlleenLezen = $indicatieAlleenLezen;
        return $this;
    }

    /**
     * Gets as indicatieExtraValidatie
     *
     * @return bool
     */
    public function getIndicatieExtraValidatie()
    {
        return $this->indicatieExtraValidatie;
    }

    /**
     * Sets a new indicatieExtraValidatie
     *
     * @param bool $indicatieExtraValidatie
     * @return self
     */
    public function setIndicatieExtraValidatie(bool $indicatieExtraValidatie = null)
    {
        $this->indicatieExtraValidatie = $indicatieExtraValidatie;
        return $this;
    }

    /**
     * Gets as indicatieRelevant
     *
     * @return bool
     */
    public function getIndicatieRelevant()
    {
        return $this->indicatieRelevant;
    }

    /**
     * Sets a new indicatieRelevant
     *
     * @param bool $indicatieRelevant
     * @return self
     */
    public function setIndicatieRelevant(bool $indicatieRelevant = null)
    {
        $this->indicatieRelevant = $indicatieRelevant;
        return $this;
    }

    /**
     * Gets as indicatieVerplicht
     *
     * @return bool
     */
    public function getIndicatieVerplicht()
    {
        return $this->indicatieVerplicht;
    }

    /**
     * Sets a new indicatieVerplicht
     *
     * @param bool $indicatieVerplicht
     * @return self
     */
    public function setIndicatieVerplicht(bool $indicatieVerplicht = null)
    {
        $this->indicatieVerplicht = $indicatieVerplicht;
        return $this;
    }


}

