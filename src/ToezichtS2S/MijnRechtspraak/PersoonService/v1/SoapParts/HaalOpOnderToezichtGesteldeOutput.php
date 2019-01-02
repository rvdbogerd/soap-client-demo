<?php

namespace ToezichtS2S\MijnRechtspraak\PersoonService\v1\SoapParts;

/**
 * Class representing HaalOpOnderToezichtGesteldeOutput
 */
class HaalOpOnderToezichtGesteldeOutput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGesteldeResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGesteldeResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGesteldeResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\PersoonService\v1\HaalOpOnderToezichtGesteldeResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

