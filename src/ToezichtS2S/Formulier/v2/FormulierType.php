<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType;

/**
 * Class representing FormulierType
 *
 *
 * XSD Type: Formulier
 */
class FormulierType extends ObjectIdentificatieEnVersieType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property string $sjabloon
     */
    private $sjabloon = null;

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectReferentieType
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij
     * @return self
     */
    public function setBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Gets as sjabloon
     *
     * @return string
     */
    public function getSjabloon()
    {
        return $this->sjabloon;
    }

    /**
     * Sets a new sjabloon
     *
     * @param string $sjabloon
     * @return self
     */
    public function setSjabloon(string $sjabloon = null)
    {
        $this->sjabloon = $sjabloon;
        return $this;
    }


}

