<?php

namespace ToezichtS2S\Taak\v2;

/**
 * Class representing TaakDetailType
 *
 *
 * XSD Type: TaakDetail
 */
class TaakDetailType extends TaakType
{

    /**
     * @property \DateTime $datumGerappelleerd
     */
    private $datumGerappelleerd = null;

    /**
     * @property \DateTime $datumGereed
     */
    private $datumGereed = null;

    /**
     * @property \DateTime $datumGereedNaUitstel
     */
    private $datumGereedNaUitstel = null;

    /**
     * @property \DateTime $datumVanaf
     */
    private $datumVanaf = null;

    /**
     * Gets as datumGerappelleerd
     *
     * @return \DateTime
     */
    public function getDatumGerappelleerd()
    {
        return $this->datumGerappelleerd;
    }

    /**
     * Sets a new datumGerappelleerd
     *
     * @param \DateTime $datumGerappelleerd
     * @return self
     */
    public function setDatumGerappelleerd(\DateTime $datumGerappelleerd = null)
    {
        $this->datumGerappelleerd = $datumGerappelleerd;
        return $this;
    }

    /**
     * Gets as datumGereed
     *
     * @return \DateTime
     */
    public function getDatumGereed()
    {
        return $this->datumGereed;
    }

    /**
     * Sets a new datumGereed
     *
     * @param \DateTime $datumGereed
     * @return self
     */
    public function setDatumGereed(\DateTime $datumGereed = null)
    {
        $this->datumGereed = $datumGereed;
        return $this;
    }

    /**
     * Gets as datumGereedNaUitstel
     *
     * @return \DateTime
     */
    public function getDatumGereedNaUitstel()
    {
        return $this->datumGereedNaUitstel;
    }

    /**
     * Sets a new datumGereedNaUitstel
     *
     * @param \DateTime $datumGereedNaUitstel
     * @return self
     */
    public function setDatumGereedNaUitstel(\DateTime $datumGereedNaUitstel = null)
    {
        $this->datumGereedNaUitstel = $datumGereedNaUitstel;
        return $this;
    }

    /**
     * Gets as datumVanaf
     *
     * @return \DateTime
     */
    public function getDatumVanaf()
    {
        return $this->datumVanaf;
    }

    /**
     * Sets a new datumVanaf
     *
     * @param \DateTime $datumVanaf
     * @return self
     */
    public function setDatumVanaf(\DateTime $datumVanaf = null)
    {
        $this->datumVanaf = $datumVanaf;
        return $this;
    }


}

