<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing SectieType
 *
 *
 * XSD Type: Sectie
 */
class SectieType
{

    /**
     * @property string $titel
     */
    private $titel = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $secties
     */
    private $secties = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\ElementType[] $elementen
     */
    private $elementen = null;

    /**
     * Gets as titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets a new titel
     *
     * @param string $titel
     * @return self
     */
    public function setTitel(string $titel = null)
    {
        $this->titel = $titel;
        return $this;
    }

    /**
     * Adds as sectie
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie
     */
    public function addToSecties(\ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie)
    {
        $this->secties[] = $sectie;
        return $this;
    }

    /**
     * isset secties
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecties($index)
    {
        return isset($this->secties[$index]);
    }

    /**
     * unset secties
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecties($index)
    {
        unset($this->secties[$index]);
    }

    /**
     * Gets as secties
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\SectieType[]
     */
    public function getSecties()
    {
        return $this->secties;
    }

    /**
     * Sets a new secties
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $secties
     * @return self
     */
    public function setSecties(array $secties = null)
    {
        $this->secties = $secties;
        return $this;
    }

    /**
     * Adds as element
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\ElementType $element
     */
    public function addToElementen(\ToezichtS2S\Formulier\v2\Opmaak\ElementType $element)
    {
        $this->elementen[] = $element;
        return $this;
    }

    /**
     * isset elementen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementen($index)
    {
        return isset($this->elementen[$index]);
    }

    /**
     * unset elementen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementen($index)
    {
        unset($this->elementen[$index]);
    }

    /**
     * Gets as elementen
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\ElementType[]
     */
    public function getElementen()
    {
        return $this->elementen;
    }

    /**
     * Sets a new elementen
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\ElementType[] $elementen
     * @return self
     */
    public function setElementen(array $elementen = null)
    {
        $this->elementen = $elementen;
        return $this;
    }


}

