<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing BerichtBijlageType
 *
 *
 * XSD Type: BerichtBijlage
 */
class BerichtBijlageType
{

    /**
     * @property string $beschrijving
     */
    private $beschrijving = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     */
    private $bijlage = null;

    /**
     * @property int $volgnummer
     */
    private $volgnummer = null;

    /**
     * Gets as beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * Sets a new beschrijving
     *
     * @param string $beschrijving
     * @return self
     */
    public function setBeschrijving(string $beschrijving = null)
    {
        $this->beschrijving = $beschrijving;
        return $this;
    }

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
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }

    /**
     * Sets a new volgnummer
     *
     * @param int $volgnummer
     * @return self
     */
    public function setVolgnummer(int $volgnummer = null)
    {
        $this->volgnummer = $volgnummer;
        return $this;
    }


}

