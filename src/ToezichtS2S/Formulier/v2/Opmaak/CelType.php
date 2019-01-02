<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing CelType
 *
 *
 * XSD Type: Cel
 */
class CelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\ElementType $element
     */
    private $element = null;

    /**
     * @property int $kolom
     */
    private $kolom = null;

    /**
     * @property int $rij
     */
    private $rij = null;

    /**
     * Gets as element
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\ElementType
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\ElementType $element
     * @return self
     */
    public function setElement(\ToezichtS2S\Formulier\v2\Opmaak\ElementType $element = null)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Gets as kolom
     *
     * @return int
     */
    public function getKolom()
    {
        return $this->kolom;
    }

    /**
     * Sets a new kolom
     *
     * @param int $kolom
     * @return self
     */
    public function setKolom(int $kolom = null)
    {
        $this->kolom = $kolom;
        return $this;
    }

    /**
     * Gets as rij
     *
     * @return int
     */
    public function getRij()
    {
        return $this->rij;
    }

    /**
     * Sets a new rij
     *
     * @param int $rij
     * @return self
     */
    public function setRij(int $rij = null)
    {
        $this->rij = $rij;
        return $this;
    }


}

