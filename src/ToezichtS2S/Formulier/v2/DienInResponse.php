<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing DienInResponse
 */
class DienInResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\DienInAntwoordType $dienInResult
     */
    private $dienInResult = null;

    /**
     * Gets as dienInResult
     *
     * @return \ToezichtS2S\Formulier\v2\DienInAntwoordType
     */
    public function getDienInResult()
    {
        return $this->dienInResult;
    }

    /**
     * Sets a new dienInResult
     *
     * @param \ToezichtS2S\Formulier\v2\DienInAntwoordType $dienInResult
     * @return self
     */
    public function setDienInResult(\ToezichtS2S\Formulier\v2\DienInAntwoordType $dienInResult = null)
    {
        $this->dienInResult = $dienInResult;
        return $this;
    }


}

