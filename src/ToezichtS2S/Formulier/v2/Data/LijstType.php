<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing LijstType
 *
 *
 * XSD Type: Lijst
 */
class LijstType extends WaardeType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\LijstRegelType[] $regels
     */
    private $regels = null;

    /**
     * Adds as lijstRegel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Data\LijstRegelType $lijstRegel
     */
    public function addToRegels(\ToezichtS2S\Formulier\v2\Data\LijstRegelType $lijstRegel)
    {
        $this->regels[] = $lijstRegel;
        return $this;
    }

    /**
     * isset regels
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegels($index)
    {
        return isset($this->regels[$index]);
    }

    /**
     * unset regels
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegels($index)
    {
        unset($this->regels[$index]);
    }

    /**
     * Gets as regels
     *
     * @return \ToezichtS2S\Formulier\v2\Data\LijstRegelType[]
     */
    public function getRegels()
    {
        return $this->regels;
    }

    /**
     * Sets a new regels
     *
     * @param \ToezichtS2S\Formulier\v2\Data\LijstRegelType[] $regels
     * @return self
     */
    public function setRegels(array $regels = null)
    {
        $this->regels = $regels;
        return $this;
    }


}

