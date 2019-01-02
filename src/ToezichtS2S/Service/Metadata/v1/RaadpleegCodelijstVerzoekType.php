<?php

namespace ToezichtS2S\Service\Metadata\v1;

use ToezichtS2S\Service\Algemeen\v1\VerzoekType;

/**
 * Class representing RaadpleegCodelijstVerzoekType
 *
 *
 * XSD Type: RaadpleegCodelijstVerzoek
 */
class RaadpleegCodelijstVerzoekType extends VerzoekType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * Gets as identificatie
     *
     * @return string
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(string $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }


}

