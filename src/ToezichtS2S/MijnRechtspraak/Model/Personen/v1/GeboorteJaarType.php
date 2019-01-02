<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing GeboorteJaarType
 *
 *
 * XSD Type: GeboorteJaar
 */
class GeboorteJaarType extends GeboorteType
{

    /**
     * @property int $jaar
     */
    private $jaar = null;

    /**
     * Gets as jaar
     *
     * @return int
     */
    public function getJaar()
    {
        return $this->jaar;
    }

    /**
     * Sets a new jaar
     *
     * @param int $jaar
     * @return self
     */
    public function setJaar(int $jaar = null)
    {
        $this->jaar = $jaar;
        return $this;
    }


}

