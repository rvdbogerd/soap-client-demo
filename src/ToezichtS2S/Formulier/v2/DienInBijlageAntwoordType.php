<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing DienInBijlageAntwoordType
 *
 *
 * XSD Type: DienInBijlageAntwoord
 */
class DienInBijlageAntwoordType extends AntwoordType
{

    /**
     * @property string $volgnummer
     */
    private $volgnummer = null;

    /**
     * Gets as volgnummer
     *
     * @return string
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }

    /**
     * Sets a new volgnummer
     *
     * @param string $volgnummer
     * @return self
     */
    public function setVolgnummer(string $volgnummer = null)
    {
        $this->volgnummer = $volgnummer;
        return $this;
    }


}

