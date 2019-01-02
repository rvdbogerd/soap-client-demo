<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing TrekIn
 */
class TrekIn
{

    /**
     * @property \ToezichtS2S\Formulier\v2\TrekInVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Formulier\v2\TrekInVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Formulier\v2\TrekInVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Formulier\v2\TrekInVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

