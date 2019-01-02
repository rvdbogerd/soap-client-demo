<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

/**
 * Class representing ZaakReferentiesType
 *
 *
 * XSD Type: ZaakReferenties
 */
class ZaakReferentiesType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[] $zaakReferentie
     */
    private $zaakReferentie = [
        
    ];

    /**
     * Adds as zaakReferentie
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaakReferentie
     */
    public function addToZaakReferentie(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaakReferentie)
    {
        $this->zaakReferentie[] = $zaakReferentie;
        return $this;
    }

    /**
     * isset zaakReferentie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZaakReferentie($index)
    {
        return isset($this->zaakReferentie[$index]);
    }

    /**
     * unset zaakReferentie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZaakReferentie($index)
    {
        unset($this->zaakReferentie[$index]);
    }

    /**
     * Gets as zaakReferentie
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[]
     */
    public function getZaakReferentie()
    {
        return $this->zaakReferentie;
    }

    /**
     * Sets a new zaakReferentie
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType[] $zaakReferentie
     * @return self
     */
    public function setZaakReferentie(array $zaakReferentie = null)
    {
        $this->zaakReferentie = $zaakReferentie;
        return $this;
    }


}

