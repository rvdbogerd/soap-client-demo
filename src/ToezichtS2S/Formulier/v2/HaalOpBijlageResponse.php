<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing HaalOpBijlageResponse
 */
class HaalOpBijlageResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOpBijlageAntwoordType $haalOpBijlageResult
     */
    private $haalOpBijlageResult = null;

    /**
     * Gets as haalOpBijlageResult
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOpBijlageAntwoordType
     */
    public function getHaalOpBijlageResult()
    {
        return $this->haalOpBijlageResult;
    }

    /**
     * Sets a new haalOpBijlageResult
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOpBijlageAntwoordType $haalOpBijlageResult
     * @return self
     */
    public function setHaalOpBijlageResult(\ToezichtS2S\Formulier\v2\HaalOpBijlageAntwoordType $haalOpBijlageResult = null)
    {
        $this->haalOpBijlageResult = $haalOpBijlageResult;
        return $this;
    }


}

