<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing TabelType
 *
 *
 * XSD Type: Tabel
 */
class TabelType extends ElementType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\CelType[] $cellen
     */
    private $cellen = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\KolomType[] $kolommen
     */
    private $kolommen = null;

    /**
     * Adds as cel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\CelType $cel
     */
    public function addToCellen(\ToezichtS2S\Formulier\v2\Opmaak\CelType $cel)
    {
        $this->cellen[] = $cel;
        return $this;
    }

    /**
     * isset cellen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCellen($index)
    {
        return isset($this->cellen[$index]);
    }

    /**
     * unset cellen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCellen($index)
    {
        unset($this->cellen[$index]);
    }

    /**
     * Gets as cellen
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\CelType[]
     */
    public function getCellen()
    {
        return $this->cellen;
    }

    /**
     * Sets a new cellen
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\CelType[] $cellen
     * @return self
     */
    public function setCellen(array $cellen = null)
    {
        $this->cellen = $cellen;
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


}

