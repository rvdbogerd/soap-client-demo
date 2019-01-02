<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing ZoekSjablonenInput
 */
class ZoekSjablonenInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\ZoekSjablonen $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\ZoekSjablonen
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\ZoekSjablonen $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\ZoekSjablonen $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

