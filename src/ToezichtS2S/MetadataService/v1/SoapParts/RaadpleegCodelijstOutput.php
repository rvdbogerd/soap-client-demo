<?php

namespace ToezichtS2S\MetadataService\v1\SoapParts;

/**
 * Class representing RaadpleegCodelijstOutput
 */
class RaadpleegCodelijstOutput
{

    /**
     * @property \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MetadataService\v1\RaadpleegCodelijstResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

