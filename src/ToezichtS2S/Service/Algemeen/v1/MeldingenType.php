<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing MeldingenType
 *
 *
 * XSD Type: Meldingen
 */
class MeldingenType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\MeldingType[] $melding
     */
    private $melding = [
        
    ];

    /**
     * Adds as melding
     *
     * @return self
     * @param \ToezichtS2S\Service\Algemeen\v1\MeldingType $melding
     */
    public function addToMelding(\ToezichtS2S\Service\Algemeen\v1\MeldingType $melding)
    {
        $this->melding[] = $melding;
        return $this;
    }

    /**
     * isset melding
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMelding($index)
    {
        return isset($this->melding[$index]);
    }

    /**
     * unset melding
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMelding($index)
    {
        unset($this->melding[$index]);
    }

    /**
     * Gets as melding
     *
     * @return \ToezichtS2S\Service\Algemeen\v1\MeldingType[]
     */
    public function getMelding()
    {
        return $this->melding;
    }

    /**
     * Sets a new melding
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\MeldingType[] $melding
     * @return self
     */
    public function setMelding(array $melding = null)
    {
        $this->melding = $melding;
        return $this;
    }


}

