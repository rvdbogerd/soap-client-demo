<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing Raadpleeg
 */
class Raadpleeg
{

    /**
     * @property \ToezichtS2S\Bericht\v2\RaadpleegVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Bericht\v2\RaadpleegVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Bericht\v2\RaadpleegVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Bericht\v2\RaadpleegVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

