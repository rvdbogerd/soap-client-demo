<?php

namespace ToezichtS2S\NotificatieService\v1\SoapParts;

/**
 * Class representing ZoekOutput
 */
class ZoekOutput
{

    /**
     * @property \ToezichtS2S\NotificatieService\v1\ZoekResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\NotificatieService\v1\ZoekResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\NotificatieService\v1\ZoekResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\NotificatieService\v1\ZoekResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

