<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing StandaardZoekVerzoekType
 *
 *
 * XSD Type: StandaardZoekVerzoek
 */
class StandaardZoekVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\PagineerVerzoekType $paginering
     */
    private $paginering = null;

    /**
     * Gets as paginering
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\PagineerVerzoekType
     */
    public function getPaginering()
    {
        return $this->paginering;
    }

    /**
     * Sets a new paginering
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\PagineerVerzoekType $paginering
     * @return self
     */
    public function setPaginering(\ToezichtS2S\Service\Algemeen\v1\PagineerVerzoekType $paginering = null)
    {
        $this->paginering = $paginering;
        return $this;
    }


}

