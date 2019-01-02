<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing PartnernaamType
 *
 *
 * XSD Type: Partnernaam
 */
class PartnernaamType extends AchternaamType
{

    /**
     * @property string $aanduidingNaamgebruik
     */
    private $aanduidingNaamgebruik = null;

    /**
     * Gets as aanduidingNaamgebruik
     *
     * @return string
     */
    public function getAanduidingNaamgebruik()
    {
        return $this->aanduidingNaamgebruik;
    }

    /**
     * Sets a new aanduidingNaamgebruik
     *
     * @param string $aanduidingNaamgebruik
     * @return self
     */
    public function setAanduidingNaamgebruik(string $aanduidingNaamgebruik = null)
    {
        $this->aanduidingNaamgebruik = $aanduidingNaamgebruik;
        return $this;
    }


}

