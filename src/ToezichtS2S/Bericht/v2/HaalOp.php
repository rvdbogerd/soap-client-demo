<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing HaalOp
 */
class HaalOp
{

    /**
     * @property \ToezichtS2S\Bericht\v2\HaalOpVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Bericht\v2\HaalOpVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Bericht\v2\HaalOpVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Bericht\v2\HaalOpVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

