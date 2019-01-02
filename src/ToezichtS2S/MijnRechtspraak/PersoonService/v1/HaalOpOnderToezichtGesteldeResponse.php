<?php

namespace ToezichtS2S\MijnRechtspraak\PersoonService\v1;

/**
 * Class representing HaalOpOnderToezichtGesteldeResponse
 */
class HaalOpOnderToezichtGesteldeResponse
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeAntwoordType $haalOpOnderToezichtGesteldeResult
     */
    private $haalOpOnderToezichtGesteldeResult = null;

    /**
     * Gets as haalOpOnderToezichtGesteldeResult
     *
     * @return \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeAntwoordType
     */
    public function getHaalOpOnderToezichtGesteldeResult()
    {
        return $this->haalOpOnderToezichtGesteldeResult;
    }

    /**
     * Sets a new haalOpOnderToezichtGesteldeResult
     *
     * @param \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeAntwoordType $haalOpOnderToezichtGesteldeResult
     * @return self
     */
    public function setHaalOpOnderToezichtGesteldeResult(\ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeAntwoordType $haalOpOnderToezichtGesteldeResult = null)
    {
        $this->haalOpOnderToezichtGesteldeResult = $haalOpOnderToezichtGesteldeResult;
        return $this;
    }


}

