<?php

namespace ToezichtS2S\Bericht\v2\SoapParts;

/**
 * Class representing MaakAanOutput
 */
class MaakAanOutput
{

    /**
     * @property \ToezichtS2S\Bericht\v2\MaakAanResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Bericht\v2\MaakAanResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Bericht\v2\MaakAanResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Bericht\v2\MaakAanResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

