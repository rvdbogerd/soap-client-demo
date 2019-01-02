<?php

namespace ToezichtS2S\Bericht\v2;

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
     * @property \ToezichtS2S\Bericht\v2\BerichtDetailType $bericht
     */
    private $bericht = null;

    /**
     * Gets as bericht
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtDetailType
     */
    public function getBericht()
    {
        return $this->bericht;
    }

    /**
     * Sets a new bericht
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtDetailType $bericht
     * @return self
     */
    public function setBericht(\ToezichtS2S\Bericht\v2\BerichtDetailType $bericht = null)
    {
        $this->bericht = $bericht;
        return $this;
    }


}

