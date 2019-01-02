<?php

namespace ToezichtS2S\MijnRechtspraak\Toezicht\Model\Zaken\v1;

use ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakDetailType;

/**
 * Class representing BewindType
 *
 *
 * XSD Type: Bewind
 */
class BewindType extends ZaakDetailType
{

    /**
     * @property \DateTime $datumEindeBepaaldeDuur
     */
    private $datumEindeBepaaldeDuur = null;

    /**
     * @property bool $indicatieBeperkt
     */
    private $indicatieBeperkt = null;

    /**
     * @property bool $indicatieTaakverdeling
     */
    private $indicatieTaakverdeling = null;

    /**
     * @property string $toelichtingBeperking
     */
    private $toelichtingBeperking = null;

    /**
     * Gets as datumEindeBepaaldeDuur
     *
     * @return \DateTime
     */
    public function getDatumEindeBepaaldeDuur()
    {
        return $this->datumEindeBepaaldeDuur;
    }

    /**
     * Sets a new datumEindeBepaaldeDuur
     *
     * @param \DateTime $datumEindeBepaaldeDuur
     * @return self
     */
    public function setDatumEindeBepaaldeDuur(\DateTime $datumEindeBepaaldeDuur = null)
    {
        $this->datumEindeBepaaldeDuur = $datumEindeBepaaldeDuur;
        return $this;
    }

    /**
     * Gets as indicatieBeperkt
     *
     * @return bool
     */
    public function getIndicatieBeperkt()
    {
        return $this->indicatieBeperkt;
    }

    /**
     * Sets a new indicatieBeperkt
     *
     * @param bool $indicatieBeperkt
     * @return self
     */
    public function setIndicatieBeperkt(bool $indicatieBeperkt = null)
    {
        $this->indicatieBeperkt = $indicatieBeperkt;
        return $this;
    }

    /**
     * Gets as indicatieTaakverdeling
     *
     * @return bool
     */
    public function getIndicatieTaakverdeling()
    {
        return $this->indicatieTaakverdeling;
    }

    /**
     * Sets a new indicatieTaakverdeling
     *
     * @param bool $indicatieTaakverdeling
     * @return self
     */
    public function setIndicatieTaakverdeling(bool $indicatieTaakverdeling = null)
    {
        $this->indicatieTaakverdeling = $indicatieTaakverdeling;
        return $this;
    }

    /**
     * Gets as toelichtingBeperking
     *
     * @return string
     */
    public function getToelichtingBeperking()
    {
        return $this->toelichtingBeperking;
    }

    /**
     * Sets a new toelichtingBeperking
     *
     * @param string $toelichtingBeperking
     * @return self
     */
    public function setToelichtingBeperking(string $toelichtingBeperking = null)
    {
        $this->toelichtingBeperking = $toelichtingBeperking;
        return $this;
    }


}

