<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts;

/**
 * Class representing HaalOpOutput
 */
class HaalOpOutput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOpResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOpResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOpResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOpResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

