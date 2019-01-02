<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ArrayOfSoortMimeType
 *
 *
 * XSD Type: ArrayOfSoortMimeType
 */
class ArrayOfSoortMimeType
{

    /**
     * @property string[] $soortMimeType
     */
    private $soortMimeType = [
        
    ];

    /**
     * Adds as soortMimeType
     *
     * @return self
     * @param string $soortMimeType
     */
    public function addToSoortMimeType($soortMimeType)
    {
        $this->soortMimeType[] = $soortMimeType;
        return $this;
    }

    /**
     * isset soortMimeType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoortMimeType($index)
    {
        return isset($this->soortMimeType[$index]);
    }

    /**
     * unset soortMimeType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoortMimeType($index)
    {
        unset($this->soortMimeType[$index]);
    }

    /**
     * Gets as soortMimeType
     *
     * @return string[]
     */
    public function getSoortMimeType()
    {
        return $this->soortMimeType;
    }

    /**
     * Sets a new soortMimeType
     *
     * @param string $soortMimeType
     * @return self
     */
    public function setSoortMimeType(array $soortMimeType = null)
    {
        $this->soortMimeType = $soortMimeType;
        return $this;
    }


}

