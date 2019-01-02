<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing DienInInput
 */
class DienInInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienIn $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\DienIn
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\DienIn $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\DienIn $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

