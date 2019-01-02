<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

use ToezichtS2S\Model\Algemeen\v1\ObjectIdentificatieType;

/**
 * Class representing ZaakType
 *
 *
 * XSD Type: Zaak
 */
class ZaakType extends ObjectIdentificatieType
{

    /**
     * @property string $zaakType
     */
    private $zaakType = null;

    /**
     * Gets as zaakType
     *
     * @return string
     */
    public function getZaakType()
    {
        return $this->zaakType;
    }

    /**
     * Sets a new zaakType
     *
     * @param string $zaakType
     * @return self
     */
    public function setZaakType(string $zaakType = null)
    {
        $this->zaakType = $zaakType;
        return $this;
    }


}

