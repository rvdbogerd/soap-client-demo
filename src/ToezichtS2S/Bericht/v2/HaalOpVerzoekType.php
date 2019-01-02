<?php

namespace ToezichtS2S\Bericht\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing HaalOpVerzoekType
 *
 *
 * XSD Type: HaalOpVerzoek
 */
class HaalOpVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectIdentificatieType $object
     */
    private $object = null;

    /**
     * Gets as object
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectIdentificatieType
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectIdentificatieType $object
     * @return self
     */
    public function setObject(\ToezichtS2S\Algemeen\v2\ObjectIdentificatieType $object = null)
    {
        $this->object = $object;
        return $this;
    }


}

