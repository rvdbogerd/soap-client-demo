<?php

namespace ToezichtS2S\Service\Algemeen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing PagineerVerzoekType
 *
 *
 * XSD Type: PagineerVerzoek
 */
class PagineerVerzoekType extends ExtensibleDataObjectType
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

