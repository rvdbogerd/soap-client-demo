<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts;

/**
 * Class representing HaalOpInput
 */
class HaalOpInput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOp $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOp
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOp $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\HaalOp $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

