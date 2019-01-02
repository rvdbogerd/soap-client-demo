<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing DecimaalGetalType
 *
 *
 * XSD Type: DecimaalGetal
 */
class DecimaalGetalType extends GegevenType
{

    /**
     * @property float $maximum
     */
    private $maximum = null;

    /**
     * @property float $minimum
     */
    private $minimum = null;

    /**
     * @property int $precisie
     */
    private $precisie = null;

    /**
     * Gets as maximum
     *
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets a new maximum
     *
     * @param float $maximum
     * @return self
     */
    public function setMaximum(float $maximum = null)
    {
        $this->maximum = $maximum;
        return $this;
    }

    /**
     * Gets as minimum
     *
     * @return float
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets a new minimum
     *
     * @param float $minimum
     * @return self
     */
    public function setMinimum(float $minimum = null)
    {
        $this->minimum = $minimum;
        return $this;
    }

    /**
     * Gets as precisie
     *
     * @return int
     */
    public function getPrecisie()
    {
        return $this->precisie;
    }

    /**
     * Sets a new precisie
     *
     * @param int $precisie
     * @return self
     */
    public function setPrecisie(int $precisie = null)
    {
        $this->precisie = $precisie;
        return $this;
    }


}

