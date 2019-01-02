<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing ArrayOfGegevenType
 *
 *
 * XSD Type: ArrayOfGegeven
 */
class ArrayOfGegevenType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\GegevenType[] $gegeven
     */
    private $gegeven = [
        
    ];

    /**
     * Adds as gegeven
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven
     */
    public function addToGegeven(\ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven)
    {
        $this->gegeven[] = $gegeven;
        return $this;
    }

    /**
     * isset gegeven
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGegeven($index)
    {
        return isset($this->gegeven[$index]);
    }

    /**
     * unset gegeven
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGegeven($index)
    {
        unset($this->gegeven[$index]);
    }

    /**
     * Gets as gegeven
     *
     * @return \ToezichtS2S\Formulier\v2\Data\GegevenType[]
     */
    public function getGegeven()
    {
        return $this->gegeven;
    }

    /**
     * Sets a new gegeven
     *
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType[] $gegeven
     * @return self
     */
    public function setGegeven(array $gegeven = null)
    {
        $this->gegeven = $gegeven;
        return $this;
    }


}

