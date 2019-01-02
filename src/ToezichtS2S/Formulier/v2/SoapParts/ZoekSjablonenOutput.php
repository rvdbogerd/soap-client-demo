<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing ZoekSjablonenOutput
 */
class ZoekSjablonenOutput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\ZoekSjablonenResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\ZoekSjablonenResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\ZoekSjablonenResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\ZoekSjablonenResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

