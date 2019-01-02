<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing GerelateerdePersoonType
 *
 *
 * XSD Type: GerelateerdePersoon
 */
class GerelateerdePersoonType extends ExtensibleDataObjectType
{

    /**
     * @property bool $isActueel
     */
    private $isActueel = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonReferentieType $persoon
     */
    private $persoon = null;

    /**
     * @property string $relatie
     */
    private $relatie = null;

    /**
     * Gets as isActueel
     *
     * @return bool
     */
    public function getIsActueel()
    {
        return $this->isActueel;
    }

    /**
     * Sets a new isActueel
     *
     * @param bool $isActueel
     * @return self
     */
    public function setIsActueel(bool $isActueel = null)
    {
        $this->isActueel = $isActueel;
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
     * Gets as relatie
     *
     * @return string
     */
    public function getRelatie()
    {
        return $this->relatie;
    }

    /**
     * Sets a new relatie
     *
     * @param string $relatie
     * @return self
     */
    public function setRelatie(string $relatie = null)
    {
        $this->relatie = $relatie;
        return $this;
    }


}

