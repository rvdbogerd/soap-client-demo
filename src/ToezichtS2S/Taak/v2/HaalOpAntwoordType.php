<?php

namespace ToezichtS2S\Taak\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing HaalOpAntwoordType
 *
 *
 * XSD Type: HaalOpAntwoord
 */
class HaalOpAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Taak\v2\TaakDetailType $taak
     */
    private $taak = null;

    /**
     * Gets as taak
     *
     * @return \ToezichtS2S\Taak\v2\TaakDetailType
     */
    public function getTaak()
    {
        return $this->taak;
    }

    /**
     * Sets a new taak
     *
     * @param \ToezichtS2S\Taak\v2\TaakDetailType $taak
     * @return self
     */
    public function setTaak(\ToezichtS2S\Taak\v2\TaakDetailType $taak = null)
    {
        $this->taak = $taak;
        return $this;
    }


}

