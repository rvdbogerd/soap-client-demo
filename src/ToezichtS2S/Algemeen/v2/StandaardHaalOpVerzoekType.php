<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing StandaardHaalOpVerzoekType
 *
 *
 * XSD Type: StandaardHaalOpVerzoek
 */
class StandaardHaalOpVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType $object
     */
    private $object = null;

    /**
     * Gets as object
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType $object
     * @return self
     */
    public function setObject(\ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType $object = null)
    {
        $this->object = $object;
        return $this;
    }


}

