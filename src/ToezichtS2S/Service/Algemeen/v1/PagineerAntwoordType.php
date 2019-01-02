<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing PagineerAntwoordType
 *
 *
 * XSD Type: PagineerAntwoord
 */
class PagineerAntwoordType extends ExtensibleDataObjectType
{

    /**
     * @property int $aantalRijen
     */
    private $aantalRijen = null;

    /**
     * @property string $cookie
     */
    private $cookie = null;

    /**
     * @property bool $indicatieBeperking
     */
    private $indicatieBeperking = null;

    /**
     * @property int $startRij
     */
    private $startRij = null;

    /**
     * Gets as aantalRijen
     *
     * @return int
     */
    public function getAantalRijen()
    {
        return $this->aantalRijen;
    }

    /**
     * Sets a new aantalRijen
     *
     * @param int $aantalRijen
     * @return self
     */
    public function setAantalRijen(int $aantalRijen = null)
    {
        $this->aantalRijen = $aantalRijen;
        return $this;
    }

    /**
     * Gets as cookie
     *
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Sets a new cookie
     *
     * @param string $cookie
     * @return self
     */
    public function setCookie(string $cookie = null)
    {
        $this->cookie = $cookie;
        return $this;
    }

    /**
     * Gets as indicatieBeperking
     *
     * @return bool
     */
    public function getIndicatieBeperking()
    {
        return $this->indicatieBeperking;
    }

    /**
     * Sets a new indicatieBeperking
     *
     * @param bool $indicatieBeperking
     * @return self
     */
    public function setIndicatieBeperking(bool $indicatieBeperking = null)
    {
        $this->indicatieBeperking = $indicatieBeperking;
        return $this;
    }

    /**
     * Gets as startRij
     *
     * @return int
     */
    public function getStartRij()
    {
        return $this->startRij;
    }

    /**
     * Sets a new startRij
     *
     * @param int $startRij
     * @return self
     */
    public function setStartRij(int $startRij = null)
    {
        $this->startRij = $startRij;
        return $this;
    }


}

