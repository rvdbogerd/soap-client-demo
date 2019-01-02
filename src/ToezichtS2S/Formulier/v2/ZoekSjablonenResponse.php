<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing ZoekSjablonenResponse
 */
class ZoekSjablonenResponse
{

    /**
     * @property \ToezichtS2S\Formulier\v2\ZoekSjablonenAntwoordType $zoekSjablonenResult
     */
    private $zoekSjablonenResult = null;

    /**
     * Gets as zoekSjablonenResult
     *
     * @return \ToezichtS2S\Formulier\v2\ZoekSjablonenAntwoordType
     */
    public function getZoekSjablonenResult()
    {
        return $this->zoekSjablonenResult;
    }

    /**
     * Sets a new zoekSjablonenResult
     *
     * @param \ToezichtS2S\Formulier\v2\ZoekSjablonenAntwoordType $zoekSjablonenResult
     * @return self
     */
    public function setZoekSjablonenResult(\ToezichtS2S\Formulier\v2\ZoekSjablonenAntwoordType $zoekSjablonenResult = null)
    {
        $this->zoekSjablonenResult = $zoekSjablonenResult;
        return $this;
    }


}

