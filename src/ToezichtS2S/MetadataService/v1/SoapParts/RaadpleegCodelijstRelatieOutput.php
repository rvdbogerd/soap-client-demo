<?php

namespace ToezichtS2S\MetadataService\v1\SoapParts;

/**
 * Class representing RaadpleegCodelijstRelatieOutput
 */
class RaadpleegCodelijstRelatieOutput
{

    /**
     * @property \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatieResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatieResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatieResponse $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\MetadataService\v1\RaadpleegCodelijstRelatieResponse $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

