<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing BinaireWaardeType
 *
 *
 * XSD Type: BinaireWaarde
 */
class BinaireWaardeType extends WaardeType
{

    /**
     * @property string $beschrijving
     */
    private $beschrijving = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     */
    private $bijlage = null;

    /**
     * Gets as beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * Sets a new beschrijving
     *
     * @param string $beschrijving
     * @return self
     */
    public function setBeschrijving(string $beschrijving = null)
    {
        $this->beschrijving = $beschrijving;
        return $this;
    }

    /**
     * Gets as bijlage
     *
     * @return \ToezichtS2S\Algemeen\v2\BijlageType
     */
    public function getBijlage()
    {
        return $this->bijlage;
    }

    /**
     * Sets a new bijlage
     *
     * @param \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     * @return self
     */
    public function setBijlage(\ToezichtS2S\Algemeen\v2\BijlageType $bijlage = null)
    {
        $this->bijlage = $bijlage;
        return $this;
    }


}

