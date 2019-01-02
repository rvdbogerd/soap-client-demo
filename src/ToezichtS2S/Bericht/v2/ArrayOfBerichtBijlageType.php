<?php

namespace ToezichtS2S\Bericht\v2;

/**
 * Class representing ArrayOfBerichtBijlageType
 *
 *
 * XSD Type: ArrayOfBerichtBijlage
 */
class ArrayOfBerichtBijlageType
{

    /**
     * @property \ToezichtS2S\Bericht\v2\BerichtBijlageType[] $berichtBijlage
     */
    private $berichtBijlage = [
        
    ];

    /**
     * Adds as berichtBijlage
     *
     * @return self
     * @param \ToezichtS2S\Bericht\v2\BerichtBijlageType $berichtBijlage
     */
    public function addToBerichtBijlage(\ToezichtS2S\Bericht\v2\BerichtBijlageType $berichtBijlage)
    {
        $this->berichtBijlage[] = $berichtBijlage;
        return $this;
    }

    /**
     * isset berichtBijlage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBerichtBijlage($index)
    {
        return isset($this->berichtBijlage[$index]);
    }

    /**
     * unset berichtBijlage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBerichtBijlage($index)
    {
        unset($this->berichtBijlage[$index]);
    }

    /**
     * Gets as berichtBijlage
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtBijlageType[]
     */
    public function getBerichtBijlage()
    {
        return $this->berichtBijlage;
    }

    /**
     * Sets a new berichtBijlage
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtBijlageType[] $berichtBijlage
     * @return self
     */
    public function setBerichtBijlage(array $berichtBijlage = null)
    {
        $this->berichtBijlage = $berichtBijlage;
        return $this;
    }


}

