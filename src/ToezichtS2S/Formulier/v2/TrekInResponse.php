<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing TrekInResponse
 */
class TrekInResponse
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\AntwoordType $trekInResult
     */
    private $trekInResult = null;

    /**
     * Gets as trekInResult
     *
     * @return \ToezichtS2S\Algemeen\v2\AntwoordType
     */
    public function getTrekInResult()
    {
        return $this->trekInResult;
    }

    /**
     * Sets a new trekInResult
     *
     * @param \ToezichtS2S\Algemeen\v2\AntwoordType $trekInResult
     * @return self
     */
    public function setTrekInResult(\ToezichtS2S\Algemeen\v2\AntwoordType $trekInResult = null)
    {
        $this->trekInResult = $trekInResult;
        return $this;
    }


}

