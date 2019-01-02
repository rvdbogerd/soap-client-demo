<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing ZaakRelatieType
 *
 *
 * XSD Type: ZaakRelatie
 */
class ZaakRelatieType extends ExtensibleDataObjectType
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
     * @property string $relatie
     */
    private $relatie = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaak
     */
    private $zaak = null;

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

    /**
     * Gets as zaak
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType
     */
    public function getZaak()
    {
        return $this->zaak;
    }

    /**
     * Sets a new zaak
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaak
     * @return self
     */
    public function setZaak(\ToezichtS2S\MijnRechtspraak\Model\Zaken\v1\ZaakReferentieType $zaak = null)
    {
        $this->zaak = $zaak;
        return $this;
    }


}

