<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing GeheelGetalType
 *
 *
 * XSD Type: GeheelGetal
 */
class GeheelGetalType extends GegevenType
{

    /**
     * @property int $maximum
     */
    private $maximum = null;

    /**
     * @property int $minimum
     */
    private $minimum = null;

    /**
     * Gets as maximum
     *
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets a new maximum
     *
     * @param int $maximum
     * @return self
     */
    public function setMaximum(int $maximum = null)
    {
        $this->maximum = $maximum;
        return $this;
    }

    /**
     * Gets as minimum
     *
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets a new minimum
     *
     * @param int $minimum
     * @return self
     */
    public function setMinimum(int $minimum = null)
    {
        $this->minimum = $minimum;
        return $this;
    }


}

