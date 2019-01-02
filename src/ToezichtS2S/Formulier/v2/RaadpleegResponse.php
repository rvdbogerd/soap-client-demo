<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing RaadpleegResponse
 */
class RaadpleegResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\RaadpleegAntwoordType $raadpleegResult
     */
    private $raadpleegResult = null;

    /**
     * Gets as raadpleegResult
     *
     * @return \ToezichtS2S\Formulier\v2\RaadpleegAntwoordType
     */
    public function getRaadpleegResult()
    {
        return $this->raadpleegResult;
    }

    /**
     * Sets a new raadpleegResult
     *
     * @param \ToezichtS2S\Formulier\v2\RaadpleegAntwoordType $raadpleegResult
     * @return self
     */
    public function setRaadpleegResult(\ToezichtS2S\Formulier\v2\RaadpleegAntwoordType $raadpleegResult = null)
    {
        $this->raadpleegResult = $raadpleegResult;
        return $this;
    }


}

