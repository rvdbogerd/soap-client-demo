<?php

namespace ToezichtS2S\Bericht\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing RaadpleegVerzoekType
 *
 *
 * XSD Type: RaadpleegVerzoek
 */
class RaadpleegVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     */
    private $behoortBij = null;

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     * @return self
     */
    public function setBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }


}

