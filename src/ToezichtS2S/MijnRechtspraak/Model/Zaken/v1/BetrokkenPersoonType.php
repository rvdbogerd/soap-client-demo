<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing BetrokkenPersoonType
 *
 *
 * XSD Type: BetrokkenPersoon
 */
class BetrokkenPersoonType extends ExtensibleDataObjectType
{

    /**
     * @property \DateTime $datumAanvang
     */
    private $datumAanvang = null;

    /**
     * @property \DateTime $datumEinde
     */
    private $datumEinde = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonReferentieType $persoon
     */
    private $persoon = null;

    /**
     * @property string $rol
     */
    private $rol = null;

    /**
     * Gets as datumAanvang
     *
     * @return \DateTime
     */
    public function getDatumAanvang()
    {
        return $this->datumAanvang;
    }

    /**
     * Sets a new datumAanvang
     *
     * @param \DateTime $datumAanvang
     * @return self
     */
    public function setDatumAanvang(\DateTime $datumAanvang = null)
    {
        $this->datumAanvang = $datumAanvang;
        return $this;
    }

    /**
     * Gets as datumEinde
     *
     * @return \DateTime
     */
    public function getDatumEinde()
    {
        return $this->datumEinde;
    }

    /**
     * Sets a new datumEinde
     *
     * @param \DateTime $datumEinde
     * @return self
     */
    public function setDatumEinde(\DateTime $datumEinde = null)
    {
        $this->datumEinde = $datumEinde;
        return $this;
    }

    /**
     * Gets as persoon
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonReferentieType
     */
    public function getPersoon()
    {
        return $this->persoon;
    }

    /**
     * Sets a new persoon
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonReferentieType $persoon
     * @return self
     */
    public function setPersoon(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonReferentieType $persoon = null)
    {
        $this->persoon = $persoon;
        return $this;
    }

    /**
     * Gets as rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Sets a new rol
     *
     * @param string $rol
     * @return self
     */
    public function setRol(string $rol = null)
    {
        $this->rol = $rol;
        return $this;
    }


}

