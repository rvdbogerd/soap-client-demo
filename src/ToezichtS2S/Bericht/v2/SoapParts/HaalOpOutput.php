<?php

namespace ToezichtS2S\Bericht\v2\SoapParts;

/**
 * Class representing HaalOpOutput
 */
class HaalOpOutput
{

    /**
     * @property \ToezichtS2S\Bericht\v2\HaalOpResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Bericht\v2\HaalOpResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Bericht\v2\HaalOpResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Bericht\v2\HaalOpResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

