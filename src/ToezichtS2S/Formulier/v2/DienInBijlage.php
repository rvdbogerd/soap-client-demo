<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing DienInBijlage
 */
class DienInBijlage
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInBijlageVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Formulier\v2\DienInBijlageVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Formulier\v2\DienInBijlageVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Formulier\v2\DienInBijlageVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

