<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Documenten\v1;

use ToezichtS2S\Service\Algemeen\v1\StandaardHaalOpVerzoekType;

/**
 * Class representing HaalOpVerzoekType
 *
 *
 * XSD Type: HaalOpVerzoek
 */
class HaalOpVerzoekType extends StandaardHaalOpVerzoekType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[] $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property bool $indicatieBijlage
     */
    private $indicatieBijlage = null;

    /**
     * Adds as objectReferentie
     *
     * @return self
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType $objectReferentie
     */
    public function addToBehoortBij(\ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType $objectReferentie)
    {
        $this->behoortBij[] = $objectReferentie;
        return $this;
    }

    /**
     * isset behoortBij
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBehoortBij($index)
    {
        return isset($this->behoortBij[$index]);
    }

    /**
     * unset behoortBij
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBehoortBij($index)
    {
        unset($this->behoortBij[$index]);
    }

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[]
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[] $behoortBij
     * @return self
     */
    public function setBehoortBij(array $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Gets as indicatieBijlage
     *
     * @return bool
     */
    public function getIndicatieBijlage()
    {
        return $this->indicatieBijlage;
    }

    /**
     * Sets a new indicatieBijlage
     *
     * @param bool $indicatieBijlage
     * @return self
     */
    public function setIndicatieBijlage(bool $indicatieBijlage = null)
    {
        $this->indicatieBijlage = $indicatieBijlage;
        return $this;
    }


}

