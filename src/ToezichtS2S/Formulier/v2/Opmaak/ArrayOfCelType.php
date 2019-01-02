<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing ArrayOfCelType
 *
 *
 * XSD Type: ArrayOfCel
 */
class ArrayOfCelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\CelType[] $cel
     */
    private $cel = [
        
    ];

    /**
     * Adds as cel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\CelType $cel
     */
    public function addToCel(\ToezichtS2S\Formulier\v2\Opmaak\CelType $cel)
    {
        $this->cel[] = $cel;
        return $this;
    }

    /**
     * isset cel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCel($index)
    {
        return isset($this->cel[$index]);
    }

    /**
     * unset cel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCel($index)
    {
        unset($this->cel[$index]);
    }

    /**
     * Gets as cel
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\CelType[]
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * Sets a new cel
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\CelType[] $cel
     * @return self
     */
    public function setCel(array $cel = null)
    {
        $this->cel = $cel;
        return $this;
    }


}

