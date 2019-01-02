<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1;

/**
 * Class representing WijzigBetrokkenPersoon
 */
class WijzigBetrokkenPersoon
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\WijzigBetrokkenPersoonVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\WijzigBetrokkenPersoonVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\WijzigBetrokkenPersoonVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\WijzigBetrokkenPersoonVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

