<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing KolomType
 *
 *
 * XSD Type: Kolom
 */
class KolomType
{

    /**
     * @property int $breedte
     */
    private $breedte = null;

    /**
     * @property int $index
     */
    private $index = null;

    /**
     * Gets as breedte
     *
     * @return int
     */
    public function getBreedte()
    {
        return $this->breedte;
    }

    /**
     * Sets a new breedte
     *
     * @param int $breedte
     * @return self
     */
    public function setBreedte(int $breedte = null)
    {
        $this->breedte = $breedte;
        return $this;
    }

    /**
     * Gets as index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * @param int $index
     * @return self
     */
    public function setIndex(int $index = null)
    {
        $this->index = $index;
        return $this;
    }


}

