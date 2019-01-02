<?php

namespace ToezichtS2S\Bericht\v2\SoapParts;

/**
 * Class representing RaadpleegInput
 */
class RaadpleegInput
{

    /**
     * @property \ToezichtS2S\Bericht\v2\Raadpleeg $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Bericht\v2\Raadpleeg
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Bericht\v2\Raadpleeg $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Bericht\v2\Raadpleeg $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

