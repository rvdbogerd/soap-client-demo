<?php

namespace ToezichtS2S\NotificatieService\v1\SoapParts;

/**
 * Class representing ZoekInput
 */
class ZoekInput
{

    /**
     * @property \ToezichtS2S\NotificatieService\v1\Zoek $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\NotificatieService\v1\Zoek
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\NotificatieService\v1\Zoek $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\NotificatieService\v1\Zoek $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

