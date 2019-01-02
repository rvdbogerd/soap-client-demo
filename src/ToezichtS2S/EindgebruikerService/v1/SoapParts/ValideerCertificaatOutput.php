<?php

namespace ToezichtS2S\EindgebruikerService\v1\SoapParts;

/**
 * Class representing ValideerCertificaatOutput
 */
class ValideerCertificaatOutput
{

    /**
     * @property \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaatResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaatResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaatResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\EindgebruikerService\v1\ValideerCertificaatResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

