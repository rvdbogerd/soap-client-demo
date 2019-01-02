<?php

namespace ToezichtS2S\MetadataService\v1\SoapParts;

/**
 * Class representing RaadpleegCodelijstRelatieInput
 */
class RaadpleegCodelijstRelatieInput
{

    /**
     * @property \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatie $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatie
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatie $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatie $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

