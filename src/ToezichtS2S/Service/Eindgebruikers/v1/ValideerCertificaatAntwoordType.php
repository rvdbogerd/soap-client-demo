<?php

namespace ToezichtS2S\Service\Eindgebruikers\v1;

use ToezichtS2S\Service\Algemeen\v1\AntwoordType;

/**
 * Class representing ValideerCertificaatAntwoordType
 *
 *
 * XSD Type: ValideerCertificaatAntwoord
 */
class ValideerCertificaatAntwoordType extends AntwoordType
{

    /**
     * @property bool $indicatieProductieOmgeving
     */
    private $indicatieProductieOmgeving = null;

    /**
     * @property bool $indicatieTestOmgeving
     */
    private $indicatieTestOmgeving = null;

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\MeldingType[] $meldingen
     */
    private $meldingen = null;

    /**
     * Gets as indicatieProductieOmgeving
     *
     * @return bool
     */
    public function getIndicatieProductieOmgeving()
    {
        return $this->indicatieProductieOmgeving;
    }

    /**
     * Sets a new indicatieProductieOmgeving
     *
     * @param bool $indicatieProductieOmgeving
     * @return self
     */
    public function setIndicatieProductieOmgeving(bool $indicatieProductieOmgeving = null)
    {
        $this->indicatieProductieOmgeving = $indicatieProductieOmgeving;
        return $this;
    }

    /**
     * Gets as indicatieTestOmgeving
     *
     * @return bool
     */
    public function getIndicatieTestOmgeving()
    {
        return $this->indicatieTestOmgeving;
    }

    /**
     * Sets a new indicatieTestOmgeving
     *
     * @param bool $indicatieTestOmgeving
     * @return self
     */
    public function setIndicatieTestOmgeving(bool $indicatieTestOmgeving = null)
    {
        $this->indicatieTestOmgeving = $indicatieTestOmgeving;
        return $this;
    }

    /**
     * Adds as melding
     *
     * @return self
     * @param \ToezichtS2S\Service\Algemeen\v1\MeldingType $melding
     */
    public function addToMeldingen(\ToezichtS2S\Service\Algemeen\v1\MeldingType $melding)
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
     * @return \ToezichtS2S\Service\Algemeen\v1\MeldingType[]
     */
    public function getMeldingen()
    {
        return $this->meldingen;
    }

    /**
     * Sets a new meldingen
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\MeldingType[] $meldingen
     * @return self
     */
    public function setMeldingen(array $meldingen = null)
    {
        $this->meldingen = $meldingen;
        return $this;
    }


}

