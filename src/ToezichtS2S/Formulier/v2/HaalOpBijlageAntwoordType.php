<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing HaalOpBijlageAntwoordType
 *
 *
 * XSD Type: HaalOpBijlageAntwoord
 */
class HaalOpBijlageAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     */
    private $bijlage = null;

    /**
     * @property string $volgnummer
     */
    private $volgnummer = null;

    /**
     * Gets as bijlage
     *
     * @return \ToezichtS2S\Algemeen\v2\BijlageType
     */
    public function getBijlage()
    {
        return $this->bijlage;
    }

    /**
     * Sets a new bijlage
     *
     * @param \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     * @return self
     */
    public function setBijlage(\ToezichtS2S\Algemeen\v2\BijlageType $bijlage = null)
    {
        $this->bijlage = $bijlage;
        return $this;
    }

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

