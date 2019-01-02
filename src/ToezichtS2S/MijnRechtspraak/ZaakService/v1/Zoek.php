<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1;

/**
 * Class representing Zoek
 */
class Zoek
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\ZoekVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\ZoekVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\ZoekVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\ZoekVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

