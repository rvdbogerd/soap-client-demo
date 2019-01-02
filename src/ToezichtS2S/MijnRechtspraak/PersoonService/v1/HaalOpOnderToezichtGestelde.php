<?php

namespace ToezichtS2S\MijnRechtspraak\PersoonService\v1;

/**
 * Class representing HaalOpOnderToezichtGestelde
 */
class HaalOpOnderToezichtGestelde
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\MijnRechtspraak\Service\Personen\v1\HaalOpOnderToezichtGesteldeVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

