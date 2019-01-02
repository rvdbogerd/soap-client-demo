<?php

namespace ToezichtS2S\Service\Eindgebruikers\v1;

use ToezichtS2S\Service\Algemeen\v1\VerzoekType;

/**
 * Class representing ValideerCertificaatVerzoekType
 *
 *
 * XSD Type: ValideerCertificaatVerzoek
 */
class ValideerCertificaatVerzoekType extends VerzoekType
{

    /**
     * @property mixed $certificaat
     */
    private $certificaat = null;

    /**
     * Gets as certificaat
     *
     * @return mixed
     */
    public function getCertificaat()
    {
        return $this->certificaat;
    }

    /**
     * Sets a new certificaat
     *
     * @param mixed $certificaat
     * @return self
     */
    public function setCertificaat(\mixed $certificaat = null)
    {
        $this->certificaat = $certificaat;
        return $this;
    }


}

