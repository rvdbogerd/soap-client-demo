<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing HaalOpSjabloonOutput
 */
class HaalOpSjabloonOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpSjabloonResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpSjabloonResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpSjabloonResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\HaalOpSjabloonResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

