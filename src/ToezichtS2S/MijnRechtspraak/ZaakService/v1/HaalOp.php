<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1;

/**
 * Class representing HaalOp
 */
class HaalOp
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

