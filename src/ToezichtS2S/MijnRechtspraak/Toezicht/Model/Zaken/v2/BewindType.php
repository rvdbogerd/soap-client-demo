<?php

namespace ToezichtS2S\MijnRechtspraak\Toezicht\Model\Zaken\v2;

use ToezichtS2S\MijnRechtspraak\Toezicht\Model\Zaken\v1\BewindType as BewindTypeBase;

/**
 * Class representing BewindType
 *
 *
 * XSD Type: Bewind
 */
class BewindType extends BewindTypeBase
{

    /**
     * @property string $grond
     */
    private $grond = null;

    /**
     * @property bool $indicatieInStaatRVTeBeoordelen
     */
    private $indicatieInStaatRVTeBeoordelen = null;

    /**
     * @property bool $indicatieRegister
     */
    private $indicatieRegister = null;

    /**
     * Gets as grond
     *
     * @return string
     */
    public function getGrond()
    {
        return $this->grond;
    }

    /**
     * Sets a new grond
     *
     * @param string $grond
     * @return self
     */
    public function setGrond(string $grond = null)
    {
        $this->grond = $grond;
        return $this;
    }

    /**
     * Gets as indicatieInStaatRVTeBeoordelen
     *
     * @return bool
     */
    public function getIndicatieInStaatRVTeBeoordelen()
    {
        return $this->indicatieInStaatRVTeBeoordelen;
    }

    /**
     * Sets a new indicatieInStaatRVTeBeoordelen
     *
     * @param bool $indicatieInStaatRVTeBeoordelen
     * @return self
     */
    public function setIndicatieInStaatRVTeBeoordelen(bool $indicatieInStaatRVTeBeoordelen = null)
    {
        $this->indicatieInStaatRVTeBeoordelen = $indicatieInStaatRVTeBeoordelen;
        return $this;
    }

    /**
     * Gets as indicatieRegister
     *
     * @return bool
     */
    public function getIndicatieRegister()
    {
        return $this->indicatieRegister;
    }

    /**
     * Sets a new indicatieRegister
     *
     * @param bool $indicatieRegister
     * @return self
     */
    public function setIndicatieRegister(bool $indicatieRegister = null)
    {
        $this->indicatieRegister = $indicatieRegister;
        return $this;
    }


}

