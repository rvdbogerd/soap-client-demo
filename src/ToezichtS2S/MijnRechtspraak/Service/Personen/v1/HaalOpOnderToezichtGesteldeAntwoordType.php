<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Personen\v1;

use ToezichtS2S\Service\Algemeen\v1\AntwoordType;

/**
 * Class representing HaalOpOnderToezichtGesteldeAntwoordType
 *
 *
 * XSD Type: HaalOpOnderToezichtGesteldeAntwoord
 */
class HaalOpOnderToezichtGesteldeAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\NatuurlijkPersoonType $onderToezichtGestelde
     */
    private $onderToezichtGestelde = null;

    /**
     * Gets as onderToezichtGestelde
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\NatuurlijkPersoonType
     */
    public function getOnderToezichtGestelde()
    {
        return $this->onderToezichtGestelde;
    }

    /**
     * Sets a new onderToezichtGestelde
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\NatuurlijkPersoonType $onderToezichtGestelde
     * @return self
     */
    public function setOnderToezichtGestelde(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\NatuurlijkPersoonType $onderToezichtGestelde = null)
    {
        $this->onderToezichtGestelde = $onderToezichtGestelde;
        return $this;
    }


}

