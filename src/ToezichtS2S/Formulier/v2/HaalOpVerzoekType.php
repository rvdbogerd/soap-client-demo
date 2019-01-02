<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\StandaardHaalOpVerzoekType;

/**
 * Class representing HaalOpVerzoekType
 *
 *
 * XSD Type: HaalOpVerzoek
 */
class HaalOpVerzoekType extends StandaardHaalOpVerzoekType
{

    /**
     * @property bool $indicatieInclusiefBijlagen
     */
    private $indicatieInclusiefBijlagen = null;

    /**
     * Gets as indicatieInclusiefBijlagen
     *
     * @return bool
     */
    public function getIndicatieInclusiefBijlagen()
    {
        return $this->indicatieInclusiefBijlagen;
    }

    /**
     * Sets a new indicatieInclusiefBijlagen
     *
     * @param bool $indicatieInclusiefBijlagen
     * @return self
     */
    public function setIndicatieInclusiefBijlagen(bool $indicatieInclusiefBijlagen = null)
    {
        $this->indicatieInclusiefBijlagen = $indicatieInclusiefBijlagen;
        return $this;
    }


}

