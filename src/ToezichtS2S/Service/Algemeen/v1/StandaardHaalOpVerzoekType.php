<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing StandaardHaalOpVerzoekType
 *
 *
 * XSD Type: StandaardHaalOpVerzoek
 */
class StandaardHaalOpVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $object
     */
    private $object = null;

    /**
     * Gets as object
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $object
     * @return self
     */
    public function setObject(\ToezichtS2S\Service\Algemeen\v1\ObjectIdentificatieType $object = null)
    {
        $this->object = $object;
        return $this;
    }


}

