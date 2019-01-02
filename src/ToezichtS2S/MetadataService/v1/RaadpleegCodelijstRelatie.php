<?php

namespace ToezichtS2S\MetadataService\v1;

/**
 * Class representing RaadpleegCodelijstRelatie
 */
class RaadpleegCodelijstRelatie
{

    /**
     * @property \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstRelatieVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

