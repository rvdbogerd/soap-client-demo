<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing HaalOpBijlageOutput
 */
class HaalOpBijlageOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpBijlageResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpBijlageResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpBijlageResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\HaalOpBijlageResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

