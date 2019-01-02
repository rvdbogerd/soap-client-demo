<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing HaalOpSjabloonResponse
 */
class HaalOpSjabloonResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpSjabloonAntwoordType $haalOpSjabloonResult
     */
    private $haalOpSjabloonResult = null;

    /**
     * Gets as haalOpSjabloonResult
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpSjabloonAntwoordType
     */
    public function getHaalOpSjabloonResult()
    {
        return $this->haalOpSjabloonResult;
    }

    /**
     * Sets a new haalOpSjabloonResult
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpSjabloonAntwoordType $haalOpSjabloonResult
     * @return self
     */
    public function setHaalOpSjabloonResult(\ToezichtS2S\Formulier\v2\HaalOpSjabloonAntwoordType $haalOpSjabloonResult = null)
    {
        $this->haalOpSjabloonResult = $haalOpSjabloonResult;
        return $this;
    }


}

