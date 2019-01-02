<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing HaalOpSjabloon
 */
class HaalOpSjabloon
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\StandaardHaalOpVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Algemeen\v2\StandaardHaalOpVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Algemeen\v2\StandaardHaalOpVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Algemeen\v2\StandaardHaalOpVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

