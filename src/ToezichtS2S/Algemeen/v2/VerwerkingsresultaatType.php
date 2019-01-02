<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing VerwerkingsresultaatType
 *
 *
 * XSD Type: Verwerkingsresultaat
 */
class VerwerkingsresultaatType
{

    /**
     * @property string $incidentCode
     */
    private $incidentCode = null;

    /**
     * @property bool $indicatieCorrectVerwerkt
     */
    private $indicatieCorrectVerwerkt = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\MeldingType[] $meldingen
     */
    private $meldingen = null;

    /**
     * Gets as incidentCode
     *
     * @return string
     */
    public function getIncidentCode()
    {
        return $this->incidentCode;
    }

    /**
     * Sets a new incidentCode
     *
     * @param string $incidentCode
     * @return self
     */
    public function setIncidentCode(string $incidentCode = null)
    {
        $this->incidentCode = $incidentCode;
        return $this;
    }

    /**
     * Gets as indicatieCorrectVerwerkt
     *
     * @return bool
     */
    public function getIndicatieCorrectVerwerkt()
    {
        return $this->indicatieCorrectVerwerkt;
    }

    /**
     * Sets a new indicatieCorrectVerwerkt
     *
     * @param bool $indicatieCorrectVerwerkt
     * @return self
     */
    public function setIndicatieCorrectVerwerkt(bool $indicatieCorrectVerwerkt = null)
    {
        $this->indicatieCorrectVerwerkt = $indicatieCorrectVerwerkt;
        return $this;
    }

    /**
     * Adds as melding
     *
     * @return self
     * @param \ToezichtS2S\Algemeen\v2\MeldingType $melding
     */
    public function addToMeldingen(\ToezichtS2S\Algemeen\v2\MeldingType $melding)
    {
        $this->meldingen[] = $melding;
        return $this;
    }

    /**
     * isset meldingen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeldingen($index)
    {
        return isset($this->meldingen[$index]);
    }

    /**
     * unset meldingen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeldingen($index)
    {
        unset($this->meldingen[$index]);
    }

    /**
     * Gets as meldingen
     *
     * @return \ToezichtS2S\Algemeen\v2\MeldingType[]
     */
    public function getMeldingen()
    {
        return $this->meldingen;
    }

    /**
     * Sets a new meldingen
     *
     * @param \ToezichtS2S\Algemeen\v2\MeldingType[] $meldingen
     * @return self
     */
    public function setMeldingen(array $meldingen = null)
    {
        $this->meldingen = $meldingen;
        return $this;
    }


}

