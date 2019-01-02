<?php

namespace ToezichtS2S\Taak\v2;

/**
 * Class representing RapportageTaakType
 *
 *
 * XSD Type: RapportageTaak
 */
class RapportageTaakType extends TaakDetailType
{

    /**
     * @property \DateTime $datumAanvangPeriode
     */
    private $datumAanvangPeriode = null;

    /**
     * @property \DateTime $datumEindePeriode
     */
    private $datumEindePeriode = null;

    /**
     * Gets as datumAanvangPeriode
     *
     * @return \DateTime
     */
    public function getDatumAanvangPeriode()
    {
        return $this->datumAanvangPeriode;
    }

    /**
     * Sets a new datumAanvangPeriode
     *
     * @param \DateTime $datumAanvangPeriode
     * @return self
     */
    public function setDatumAanvangPeriode(\DateTime $datumAanvangPeriode = null)
    {
        $this->datumAanvangPeriode = $datumAanvangPeriode;
        return $this;
    }

    /**
     * Gets as datumEindePeriode
     *
     * @return \DateTime
     */
    public function getDatumEindePeriode()
    {
        return $this->datumEindePeriode;
    }

    /**
     * Sets a new datumEindePeriode
     *
     * @param \DateTime $datumEindePeriode
     * @return self
     */
    public function setDatumEindePeriode(\DateTime $datumEindePeriode = null)
    {
        $this->datumEindePeriode = $datumEindePeriode;
        return $this;
    }


}

