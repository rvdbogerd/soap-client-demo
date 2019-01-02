<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing ArrayOfKolomType
 *
 *
 * XSD Type: ArrayOfKolom
 */
class ArrayOfKolomType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\KolomType[] $kolom
     */
    private $kolom = [
        
    ];

    /**
     * Adds as kolom
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\KolomType $kolom
     */
    public function addToKolom(\ToezichtS2S\Formulier\v2\Opmaak\KolomType $kolom)
    {
        $this->kolom[] = $kolom;
        return $this;
    }

    /**
     * isset kolom
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKolom($index)
    {
        return isset($this->kolom[$index]);
    }

    /**
     * unset kolom
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKolom($index)
    {
        unset($this->kolom[$index]);
    }

    /**
     * Gets as kolom
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\KolomType[]
     */
    public function getKolom()
    {
        return $this->kolom;
    }

    /**
     * Sets a new kolom
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\KolomType[] $kolom
     * @return self
     */
    public function setKolom(array $kolom = null)
    {
        $this->kolom = $kolom;
        return $this;
    }


}

