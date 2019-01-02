<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing LijstType
 *
 *
 * XSD Type: Lijst
 */
class LijstType extends ElementType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\ElementType[] $elementen
     */
    private $elementen = null;

    /**
     * @property string $gegevenIdentificatie
     */
    private $gegevenIdentificatie = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\KolomType[] $kolommen
     */
    private $kolommen = null;

    /**
     * @property string $tekst
     */
    private $tekst = null;

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

    /**
     * Gets as gegevenIdentificatie
     *
     * @return string
     */
    public function getGegevenIdentificatie()
    {
        return $this->gegevenIdentificatie;
    }

    /**
     * Sets a new gegevenIdentificatie
     *
     * @param string $gegevenIdentificatie
     * @return self
     */
    public function setGegevenIdentificatie(string $gegevenIdentificatie = null)
    {
        $this->gegevenIdentificatie = $gegevenIdentificatie;
        return $this;
    }

    /**
     * Adds as kolom
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\KolomType $kolom
     */
    public function addToKolommen(\ToezichtS2S\Formulier\v2\Opmaak\KolomType $kolom)
    {
        $this->kolommen[] = $kolom;
        return $this;
    }

    /**
     * isset kolommen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKolommen($index)
    {
        return isset($this->kolommen[$index]);
    }

    /**
     * unset kolommen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKolommen($index)
    {
        unset($this->kolommen[$index]);
    }

    /**
     * Gets as kolommen
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\KolomType[]
     */
    public function getKolommen()
    {
        return $this->kolommen;
    }

    /**
     * Sets a new kolommen
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\KolomType[] $kolommen
     * @return self
     */
    public function setKolommen(array $kolommen = null)
    {
        $this->kolommen = $kolommen;
        return $this;
    }

    /**
     * Gets as tekst
     *
     * @return string
     */
    public function getTekst()
    {
        return $this->tekst;
    }

    /**
     * Sets a new tekst
     *
     * @param string $tekst
     * @return self
     */
    public function setTekst(string $tekst = null)
    {
        $this->tekst = $tekst;
        return $this;
    }


}

