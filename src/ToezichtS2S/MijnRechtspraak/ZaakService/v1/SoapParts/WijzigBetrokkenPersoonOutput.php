<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts;

/**
 * Class representing WijzigBetrokkenPersoonOutput
 */
class WijzigBetrokkenPersoonOutput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoonResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoonResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoonResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoonResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

