<?php

namespace ToezichtS2S\EindgebruikerService\v1;

/**
 * Class representing ValideerCertificaatResponse
 */
class ValideerCertificaatResponse
{

    /**
     * @property \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatAntwoordType $valideerCertificaatResult
     */
    private $valideerCertificaatResult = null;

    /**
     * Gets as valideerCertificaatResult
     *
     * @return \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatAntwoordType
     */
    public function getValideerCertificaatResult()
    {
        return $this->valideerCertificaatResult;
    }

    /**
     * Sets a new valideerCertificaatResult
     *
     * @param \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatAntwoordType $valideerCertificaatResult
     * @return self
     */
    public function setValideerCertificaatResult(\ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatAntwoordType $valideerCertificaatResult = null)
    {
        $this->valideerCertificaatResult = $valideerCertificaatResult;
        return $this;
    }


}

