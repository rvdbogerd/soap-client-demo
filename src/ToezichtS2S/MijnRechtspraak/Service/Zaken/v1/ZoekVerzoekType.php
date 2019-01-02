<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Zaken\v1;

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
     * @property string[] $domeinen
     */
    private $domeinen = null;

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


}

