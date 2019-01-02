<?php

namespace ToezichtS2S\MetadataService\v1;

/**
 * Class representing RaadpleegCodelijstResponse
 */
class RaadpleegCodelijstResponse
{

    /**
     * @property \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstAntwoordType $raadpleegCodelijstResult
     */
    private $raadpleegCodelijstResult = null;

    /**
     * Gets as raadpleegCodelijstResult
     *
     * @return \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstAntwoordType
     */
    public function getRaadpleegCodelijstResult()
    {
        return $this->raadpleegCodelijstResult;
    }

    /**
     * Sets a new raadpleegCodelijstResult
     *
     * @param \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstAntwoordType $raadpleegCodelijstResult
     * @return self
     */
    public function setRaadpleegCodelijstResult(\ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstAntwoordType $raadpleegCodelijstResult = null)
    {
        $this->raadpleegCodelijstResult = $raadpleegCodelijstResult;
        return $this;
    }


}

