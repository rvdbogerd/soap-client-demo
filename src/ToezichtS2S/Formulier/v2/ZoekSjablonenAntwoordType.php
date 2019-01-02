<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing ZoekSjablonenAntwoordType
 *
 *
 * XSD Type: ZoekSjablonenAntwoord
 */
class ZoekSjablonenAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[] $sjablonen
     */
    private $sjablonen = null;

    /**
     * Adds as formulierSjabloonIdentificatie
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType $formulierSjabloonIdentificatie
     */
    public function addToSjablonen(\ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType $formulierSjabloonIdentificatie)
    {
        $this->sjablonen[] = $formulierSjabloonIdentificatie;
        return $this;
    }

    /**
     * isset sjablonen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSjablonen($index)
    {
        return isset($this->sjablonen[$index]);
    }

    /**
     * unset sjablonen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSjablonen($index)
    {
        unset($this->sjablonen[$index]);
    }

    /**
     * Gets as sjablonen
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[]
     */
    public function getSjablonen()
    {
        return $this->sjablonen;
    }

    /**
     * Sets a new sjablonen
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonIdentificatieType[] $sjablonen
     * @return self
     */
    public function setSjablonen(array $sjablonen = null)
    {
        $this->sjablonen = $sjablonen;
        return $this;
    }


}

