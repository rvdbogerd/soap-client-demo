<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts;

/**
 * Class representing WijzigBetrokkenPersoonInput
 */
class WijzigBetrokkenPersoonInput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoon $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoon
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoon $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\WijzigBetrokkenPersoon $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

