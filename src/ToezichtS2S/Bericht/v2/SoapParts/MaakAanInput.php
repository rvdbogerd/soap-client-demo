<?php

namespace ToezichtS2S\Bericht\v2\SoapParts;

/**
 * Class representing MaakAanInput
 */
class MaakAanInput
{

    /**
     * @property \ToezichtS2S\Bericht\v2\MaakAan $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Bericht\v2\MaakAan
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Bericht\v2\MaakAan $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Bericht\v2\MaakAan $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

