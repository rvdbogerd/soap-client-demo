<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing HaalOpBijlageInput
 */
class HaalOpBijlageInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpBijlage $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpBijlage
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpBijlage $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\HaalOpBijlage $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

