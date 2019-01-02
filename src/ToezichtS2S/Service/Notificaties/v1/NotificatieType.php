<?php

namespace ToezichtS2S\Service\Notificaties\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing NotificatieType
 *
 *
 * XSD Type: Notificatie
 */
class NotificatieType extends ExtensibleDataObjectType
{

    /**
     * @property \DateTime $datumWijziging
     */
    private $datumWijziging = null;

    /**
     * @property string $gebeurtenis
     */
    private $gebeurtenis = null;

    /**
     * @property \ToezichtS2S\Service\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[] $informatie
     */
    private $informatie = null;

    /**
     * @property \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieType $object
     */
    private $object = null;

    /**
     * @property int $volgnummer
     */
    private $volgnummer = null;

    /**
     * Gets as datumWijziging
     *
     * @return \DateTime
     */
    public function getDatumWijziging()
    {
        return $this->datumWijziging;
    }

    /**
     * Sets a new datumWijziging
     *
     * @param \DateTime $datumWijziging
     * @return self
     */
    public function setDatumWijziging(\DateTime $datumWijziging = null)
    {
        $this->datumWijziging = $datumWijziging;
        return $this;
    }

    /**
     * Gets as gebeurtenis
     *
     * @return string
     */
    public function getGebeurtenis()
    {
        return $this->gebeurtenis;
    }

    /**
     * Sets a new gebeurtenis
     *
     * @param string $gebeurtenis
     * @return self
     */
    public function setGebeurtenis(string $gebeurtenis = null)
    {
        $this->gebeurtenis = $gebeurtenis;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * @return self
     * @param \ToezichtS2S\Service\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType $parameter
     */
    public function addToInformatie(\ToezichtS2S\Service\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType $parameter)
    {
        $this->informatie[] = $parameter;
        return $this;
    }

    /**
     * isset informatie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformatie($index)
    {
        return isset($this->informatie[$index]);
    }

    /**
     * unset informatie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformatie($index)
    {
        unset($this->informatie[$index]);
    }

    /**
     * Gets as informatie
     *
     * @return \ToezichtS2S\Service\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[]
     */
    public function getInformatie()
    {
        return $this->informatie;
    }

    /**
     * Sets a new informatie
     *
     * @param \ToezichtS2S\Service\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[] $informatie
     * @return self
     */
    public function setInformatie(array $informatie = null)
    {
        $this->informatie = $informatie;
        return $this;
    }

    /**
     * Gets as object
     *
     * @return \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieType
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \ToezichtS2S\Model\Algemeen\v1\ObjectReferentieType $object
     * @return self
     */
    public function setObject(\ToezichtS2S\Model\Algemeen\v1\ObjectReferentieType $object = null)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * Gets as volgnummer
     *
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }

    /**
     * Sets a new volgnummer
     *
     * @param int $volgnummer
     * @return self
     */
    public function setVolgnummer(int $volgnummer = null)
    {
        $this->volgnummer = $volgnummer;
        return $this;
    }


}

