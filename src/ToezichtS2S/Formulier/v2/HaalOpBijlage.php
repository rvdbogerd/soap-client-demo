<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing HaalOpBijlage
 */
class HaalOpBijlage
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpBijlageVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpBijlageVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpBijlageVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Formulier\v2\HaalOpBijlageVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

