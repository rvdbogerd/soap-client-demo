<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing DienInBijlageOutput
 */
class DienInBijlageOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInBijlageResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\DienInBijlageResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\DienInBijlageResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\DienInBijlageResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

