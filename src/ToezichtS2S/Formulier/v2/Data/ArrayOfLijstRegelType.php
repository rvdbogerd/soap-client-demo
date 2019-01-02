<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing ArrayOfLijstRegelType
 *
 *
 * XSD Type: ArrayOfLijstRegel
 */
class ArrayOfLijstRegelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\LijstRegelType[] $lijstRegel
     */
    private $lijstRegel = [
        
    ];

    /**
     * Adds as lijstRegel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Data\LijstRegelType $lijstRegel
     */
    public function addToLijstRegel(\ToezichtS2S\Formulier\v2\Data\LijstRegelType $lijstRegel)
    {
        $this->lijstRegel[] = $lijstRegel;
        return $this;
    }

    /**
     * isset lijstRegel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLijstRegel($index)
    {
        return isset($this->lijstRegel[$index]);
    }

    /**
     * unset lijstRegel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLijstRegel($index)
    {
        unset($this->lijstRegel[$index]);
    }

    /**
     * Gets as lijstRegel
     *
     * @return \ToezichtS2S\Formulier\v2\Data\LijstRegelType[]
     */
    public function getLijstRegel()
    {
        return $this->lijstRegel;
    }

    /**
     * Sets a new lijstRegel
     *
     * @param \ToezichtS2S\Formulier\v2\Data\LijstRegelType[] $lijstRegel
     * @return self
     */
    public function setLijstRegel(array $lijstRegel = null)
    {
        $this->lijstRegel = $lijstRegel;
        return $this;
    }


}

