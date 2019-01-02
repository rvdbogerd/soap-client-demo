<?php

namespace ToezichtS2S\EindgebruikerService\v1;

/**
 * Class representing ValideerCertificaat
 */
class ValideerCertificaat
{

    /**
     * @property \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Service\Eindgebruikers\v1\ValideerCertificaatVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

