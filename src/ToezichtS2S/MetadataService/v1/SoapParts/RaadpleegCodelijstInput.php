<?php

namespace ToezichtS2S\MetadataService\v1\SoapParts;

/**
 * Class representing RaadpleegCodelijstInput
 */
class RaadpleegCodelijstInput
{

    /**
     * @property \ToezichtS2S\MetadataService\v1\RaadpleegCodelijst $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MetadataService\v1\RaadpleegCodelijst
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MetadataService\v1\RaadpleegCodelijst $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MetadataService\v1\RaadpleegCodelijst $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

