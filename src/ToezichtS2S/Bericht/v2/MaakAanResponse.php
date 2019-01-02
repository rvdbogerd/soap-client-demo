<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing MaakAanResponse
 */
class MaakAanResponse
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\StandaardMaakAanAntwoordType $maakAanResult
     */
    private $maakAanResult = null;

    /**
     * Gets as maakAanResult
     *
     * @return \ToezichtS2S\Algemeen\v2\StandaardMaakAanAntwoordType
     */
    public function getMaakAanResult()
    {
        return $this->maakAanResult;
    }

    /**
     * Sets a new maakAanResult
     *
     * @param \ToezichtS2S\Algemeen\v2\StandaardMaakAanAntwoordType $maakAanResult
     * @return self
     */
    public function setMaakAanResult(\ToezichtS2S\Algemeen\v2\StandaardMaakAanAntwoordType $maakAanResult = null)
    {
        $this->maakAanResult = $maakAanResult;
        return $this;
    }


}

