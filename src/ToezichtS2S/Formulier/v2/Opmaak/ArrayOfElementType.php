<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing ArrayOfElementType
 *
 *
 * XSD Type: ArrayOfElement
 */
class ArrayOfElementType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\ElementType[] $element
     */
    private $element = [
        
    ];

    /**
     * Adds as element
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\ElementType $element
     */
    public function addToElement(\ToezichtS2S\Formulier\v2\Opmaak\ElementType $element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * isset element
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElement($index)
    {
        return isset($this->element[$index]);
    }

    /**
     * unset element
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElement($index)
    {
        unset($this->element[$index]);
    }

    /**
     * Gets as element
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\ElementType[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\ElementType[] $element
     * @return self
     */
    public function setElement(array $element = null)
    {
        $this->element = $element;
        return $this;
    }


}

