<?php

namespace ToezichtS2S\EindgebruikerService\v1\SoapParts;

/**
 * Class representing ValideerCertificaatInput
 */
class ValideerCertificaatInput
{

    /**
     * @property \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaat $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaat
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\EindgebruikerService\v1\ValideerCertificaat $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\EindgebruikerService\v1\ValideerCertificaat $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

