<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing ZoekSjablonen
 */
class ZoekSjablonen
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\VerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Algemeen\v2\VerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Algemeen\v2\VerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Algemeen\v2\VerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

