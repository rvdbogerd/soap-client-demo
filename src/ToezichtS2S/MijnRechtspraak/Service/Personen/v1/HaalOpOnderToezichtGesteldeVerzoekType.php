<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Personen\v1;

use ToezichtS2S\Service\Algemeen\v1\VerzoekType;

/**
 * Class representing HaalOpOnderToezichtGesteldeVerzoekType
 *
 *
 * XSD Type: HaalOpOnderToezichtGesteldeVerzoek
 */
class HaalOpOnderToezichtGesteldeVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $persoonIdentificatie
     */
    private $persoonIdentificatie = null;

    /**
     * Gets as persoonIdentificatie
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType
     */
    public function getPersoonIdentificatie()
    {
        return $this->persoonIdentificatie;
    }

    /**
     * Sets a new persoonIdentificatie
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $persoonIdentificatie
     * @return self
     */
    public function setPersoonIdentificatie(\ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $persoonIdentificatie = null)
    {
        $this->persoonIdentificatie = $persoonIdentificatie;
        return $this;
    }


}

