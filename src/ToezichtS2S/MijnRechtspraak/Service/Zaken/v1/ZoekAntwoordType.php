<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Zaken\v1;

use ToezichtS2S\Service\Algemeen\v1\StandaardZoekAntwoordType;

/**
 * Class representing ZoekAntwoordType
 *
 *
 * XSD Type: ZoekAntwoord
 */
class ZoekAntwoordType extends StandaardZoekAntwoordType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[] $zaken
     */
    private $zaken = null;

    /**
     * Adds as zaakReferentie
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaakReferentie
     */
    public function addToZaken(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaakReferentie)
    {
        $this->zaken[] = $zaakReferentie;
        return $this;
    }

    /**
     * isset zaken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZaken($index)
    {
        return isset($this->zaken[$index]);
    }

    /**
     * unset zaken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZaken($index)
    {
        unset($this->zaken[$index]);
    }

    /**
     * Gets as zaken
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[]
     */
    public function getZaken()
    {
        return $this->zaken;
    }

    /**
     * Sets a new zaken
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[] $zaken
     * @return self
     */
    public function setZaken(array $zaken = null)
    {
        $this->zaken = $zaken;
        return $this;
    }


}

