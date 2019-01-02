<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Zaken\v1;

use ToezichtS2S\Service\Algemeen\v1\AntwoordType;

/**
 * Class representing HaalOpAntwoordType
 *
 *
 * XSD Type: HaalOpAntwoord
 */
class HaalOpAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakDetailType $zaak
     */
    private $zaak = null;

    /**
     * Gets as zaak
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakDetailType
     */
    public function getZaak()
    {
        return $this->zaak;
    }

    /**
     * Sets a new zaak
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakDetailType $zaak
     * @return self
     */
    public function setZaak(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakDetailType $zaak = null)
    {
        $this->zaak = $zaak;
        return $this;
    }


}

