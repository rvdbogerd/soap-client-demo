<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing HaalOpResponse
 */
class HaalOpResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpAntwoordType $haalOpResult
     */
    private $haalOpResult = null;

    /**
     * Gets as haalOpResult
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpAntwoordType
     */
    public function getHaalOpResult()
    {
        return $this->haalOpResult;
    }

    /**
     * Sets a new haalOpResult
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpAntwoordType $haalOpResult
     * @return self
     */
    public function setHaalOpResult(\ToezichtS2S\Formulier\v2\HaalOpAntwoordType $haalOpResult = null)
    {
        $this->haalOpResult = $haalOpResult;
        return $this;
    }


}

