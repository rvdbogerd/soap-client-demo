<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing StandaardZoekAntwoordType
 *
 *
 * XSD Type: StandaardZoekAntwoord
 */
class StandaardZoekAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\PagineerAntwoordType $paginering
     */
    private $paginering = null;

    /**
     * Gets as paginering
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\PagineerAntwoordType
     */
    public function getPaginering()
    {
        return $this->paginering;
    }

    /**
     * Sets a new paginering
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\PagineerAntwoordType $paginering
     * @return self
     */
    public function setPaginering(\ToezichtS2S\Service\Algemeen\v1\PagineerAntwoordType $paginering = null)
    {
        $this->paginering = $paginering;
        return $this;
    }


}

