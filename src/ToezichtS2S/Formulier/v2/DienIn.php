<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing DienIn
 */
class DienIn
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Formulier\v2\DienInVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Formulier\v2\DienInVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Formulier\v2\DienInVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

