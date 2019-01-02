<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing MaakAan
 */
class MaakAan
{

    /**
     * @property \ToezichtS2S\Bericht\v2\MaakAanVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Bericht\v2\MaakAanVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Bericht\v2\MaakAanVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Bericht\v2\MaakAanVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

