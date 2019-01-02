<?php

namespace ToezichtS2S\Bericht\v2\SoapParts;

/**
 * Class representing RaadpleegOutput
 */
class RaadpleegOutput
{

    /**
     * @property \ToezichtS2S\Bericht\v2\RaadpleegResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Bericht\v2\RaadpleegResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Bericht\v2\RaadpleegResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Bericht\v2\RaadpleegResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

