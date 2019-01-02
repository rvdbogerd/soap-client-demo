<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing DienInBijlageInput
 */
class DienInBijlageInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInBijlage $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\DienInBijlage
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\DienInBijlage $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\DienInBijlage $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

