<?php

namespace ToezichtS2S\MetadataService\v1;

/**
 * Class representing RaadpleegCodelijst
 */
class RaadpleegCodelijst
{

    /**
     * @property \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoekType $verzoek
     */
    private $verzoek = null;

    /**
     * Gets as verzoek
     *
     * @return \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoekType
     */
    public function getVerzoek()
    {
        return $this->verzoek;
    }

    /**
     * Sets a new verzoek
     *
     * @param \ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoekType $verzoek
     * @return self
     */
    public function setVerzoek(\ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoekType $verzoek = null)
    {
        $this->verzoek = $verzoek;
        return $this;
    }


}

