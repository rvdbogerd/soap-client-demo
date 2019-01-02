<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing HaalOpSjabloonInput
 */
class HaalOpSjabloonInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpSjabloon $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpSjabloon
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpSjabloon $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\HaalOpSjabloon $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

