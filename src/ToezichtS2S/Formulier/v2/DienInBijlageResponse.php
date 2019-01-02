<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing DienInBijlageResponse
 */
class DienInBijlageResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInBijlageAntwoordType $dienInBijlageResult
     */
    private $dienInBijlageResult = null;

    /**
     * Gets as dienInBijlageResult
     *
     * @return \ToezichtS2S\Formulier\v2\DienInBijlageAntwoordType
     */
    public function getDienInBijlageResult()
    {
        return $this->dienInBijlageResult;
    }

    /**
     * Sets a new dienInBijlageResult
     *
     * @param \ToezichtS2S\Formulier\v2\DienInBijlageAntwoordType $dienInBijlageResult
     * @return self
     */
    public function setDienInBijlageResult(\ToezichtS2S\Formulier\v2\DienInBijlageAntwoordType $dienInBijlageResult = null)
    {
        $this->dienInBijlageResult = $dienInBijlageResult;
        return $this;
    }


}

