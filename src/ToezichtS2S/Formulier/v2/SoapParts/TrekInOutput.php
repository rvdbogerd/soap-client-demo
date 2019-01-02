<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing TrekInOutput
 */
class TrekInOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\TrekInResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\TrekInResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\TrekInResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\TrekInResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

