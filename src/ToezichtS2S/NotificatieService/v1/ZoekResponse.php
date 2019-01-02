<?php

namespace ToezichtS2S\NotificatieService\v1;

/**
 * Class representing ZoekResponse
 */
class ZoekResponse
{

    /**
     * @property \ToezichtS2S\Service\Notificaties\v1\ZoekAntwoordType $zoekResult
     */
    private $zoekResult = null;

    /**
     * Gets as zoekResult
     *
     * @return \ToezichtS2S\Service\Notificaties\v1\ZoekAntwoordType
     */
    public function getZoekResult()
    {
        return $this->zoekResult;
    }

    /**
     * Sets a new zoekResult
     *
     * @param \ToezichtS2S\Service\Notificaties\v1\ZoekAntwoordType $zoekResult
     * @return self
     */
    public function setZoekResult(\ToezichtS2S\Service\Notificaties\v1\ZoekAntwoordType $zoekResult = null)
    {
        $this->zoekResult = $zoekResult;
        return $this;
    }


}

