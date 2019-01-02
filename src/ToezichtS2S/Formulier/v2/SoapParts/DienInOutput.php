<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing DienInOutput
 */
class DienInOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\DienInResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\DienInResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\DienInResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

