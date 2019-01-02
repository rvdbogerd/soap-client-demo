<?php

namespace ToezichtS2S\MetadataService\v1;

/**
 * Class representing RaadpleegCodelijstRelatieResponse
 */
class RaadpleegCodelijstRelatieResponse
{

    /**
     * @property \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieAntwoordType $raadpleegCodelijstRelatieResult
     */
    private $raadpleegCodelijstRelatieResult = null;

    /**
     * Gets as raadpleegCodelijstRelatieResult
     *
     * @return \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieAntwoordType
     */
    public function getRaadpleegCodelijstRelatieResult()
    {
        return $this->raadpleegCodelijstRelatieResult;
    }

    /**
     * Sets a new raadpleegCodelijstRelatieResult
     *
     * @param \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieAntwoordType $raadpleegCodelijstRelatieResult
     * @return self
     */
    public function setRaadpleegCodelijstRelatieResult(\ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieAntwoordType $raadpleegCodelijstRelatieResult = null)
    {
        $this->raadpleegCodelijstRelatieResult = $raadpleegCodelijstRelatieResult;
        return $this;
    }


}

