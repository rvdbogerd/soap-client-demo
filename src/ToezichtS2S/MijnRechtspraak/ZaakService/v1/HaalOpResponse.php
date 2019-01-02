<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1;

/**
 * Class representing HaalOpResponse
 */
class HaalOpResponse
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\HaalOpAntwoordType $haalOpResult
     */
    private $haalOpResult = null;

    /**
     * Gets as haalOpResult
     *
     * @return \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\HaalOpAntwoordType
     */
    public function getHaalOpResult()
    {
        return $this->haalOpResult;
    }

    /**
     * Sets a new haalOpResult
     *
     * @param \ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\HaalOpAntwoordType $haalOpResult
     * @return self
     */
    public function setHaalOpResult(\ToezichtS2S\MijnRechtspraak\Service\Zaken\v1\HaalOpAntwoordType $haalOpResult = null)
    {
        $this->haalOpResult = $haalOpResult;
        return $this;
    }


}

