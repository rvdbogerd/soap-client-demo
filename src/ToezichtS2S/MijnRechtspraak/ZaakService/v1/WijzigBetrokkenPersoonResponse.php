<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1;

/**
 * Class representing WijzigBetrokkenPersoonResponse
 */
class WijzigBetrokkenPersoonResponse
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\AntwoordType $wijzigBetrokkenPersoonResult
     */
    private $wijzigBetrokkenPersoonResult = null;

    /**
     * Gets as wijzigBetrokkenPersoonResult
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\AntwoordType
     */
    public function getWijzigBetrokkenPersoonResult()
    {
        return $this->wijzigBetrokkenPersoonResult;
    }

    /**
     * Sets a new wijzigBetrokkenPersoonResult
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\AntwoordType $wijzigBetrokkenPersoonResult
     * @return self
     */
    public function setWijzigBetrokkenPersoonResult(\ToezichtS2S\Service\Algemeen\v1\AntwoordType $wijzigBetrokkenPersoonResult = null)
    {
        $this->wijzigBetrokkenPersoonResult = $wijzigBetrokkenPersoonResult;
        return $this;
    }


}

