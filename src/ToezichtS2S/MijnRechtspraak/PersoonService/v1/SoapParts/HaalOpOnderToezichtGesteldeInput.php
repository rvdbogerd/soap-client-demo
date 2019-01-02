<?php

namespace ToezichtS2S\MijnRechtspraak\PersoonService\v1\SoapParts;

/**
 * Class representing HaalOpOnderToezichtGesteldeInput
 */
class HaalOpOnderToezichtGesteldeInput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGestelde $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGestelde
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGestelde $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGestelde $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

