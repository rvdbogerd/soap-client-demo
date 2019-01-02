<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing ArrayOfRelevantieregelType
 *
 *
 * XSD Type: ArrayOfRelevantieregel
 */
class ArrayOfRelevantieregelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[] $relevantieregel
     */
    private $relevantieregel = [
        
    ];

    /**
     * Adds as relevantieregel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType $relevantieregel
     */
    public function addToRelevantieregel(\ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType $relevantieregel)
    {
        $this->relevantieregel[] = $relevantieregel;
        return $this;
    }

    /**
     * isset relevantieregel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelevantieregel($index)
    {
        return isset($this->relevantieregel[$index]);
    }

    /**
     * unset relevantieregel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelevantieregel($index)
    {
        unset($this->relevantieregel[$index]);
    }

    /**
     * Gets as relevantieregel
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[]
     */
    public function getRelevantieregel()
    {
        return $this->relevantieregel;
    }

    /**
     * Sets a new relevantieregel
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[] $relevantieregel
     * @return self
     */
    public function setRelevantieregel(array $relevantieregel = null)
    {
        $this->relevantieregel = $relevantieregel;
        return $this;
    }


}

