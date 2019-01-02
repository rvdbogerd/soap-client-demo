<?php

namespace ToezichtS2S\Service\Notificaties\v1;

use ToezichtS2S\Service\Algemeen\v1\StandaardZoekVerzoekType;

/**
 * Class representing ZoekVerzoekType
 *
 *
 * XSD Type: ZoekVerzoek
 */
class ZoekVerzoekType extends StandaardZoekVerzoekType
{

    /**
     * @property \DateTime $datumVanaf
     */
    private $datumVanaf = null;

    /**
     * @property string[] $domeinen
     */
    private $domeinen = null;

    /**
     * @property int $volgnummerVanaf
     */
    private $volgnummerVanaf = null;

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

    /**
     * Adds as domein
     *
     * @return self
     * @param string $domein
     */
    public function addToDomeinen($domein)
    {
        $this->domeinen[] = $domein;
        return $this;
    }

    /**
     * isset domeinen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomeinen($index)
    {
        return isset($this->domeinen[$index]);
    }

    /**
     * unset domeinen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomeinen($index)
    {
        unset($this->domeinen[$index]);
    }

    /**
     * Gets as domeinen
     *
     * @return string[]
     */
    public function getDomeinen()
    {
        return $this->domeinen;
    }

    /**
     * Sets a new domeinen
     *
     * @param string $domeinen
     * @return self
     */
    public function setDomeinen(array $domeinen = null)
    {
        $this->domeinen = $domeinen;
        return $this;
    }

    /**
     * Gets as volgnummerVanaf
     *
     * @return int
     */
    public function getVolgnummerVanaf()
    {
        return $this->volgnummerVanaf;
    }

    /**
     * Sets a new volgnummerVanaf
     *
     * @param int $volgnummerVanaf
     * @return self
     */
    public function setVolgnummerVanaf(int $volgnummerVanaf = null)
    {
        $this->volgnummerVanaf = $volgnummerVanaf;
        return $this;
    }


}

