<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing ArrayOfSoortVerwerkingType
 *
 *
 * XSD Type: ArrayOfSoortVerwerking
 */
class ArrayOfSoortVerwerkingType
{

    /**
     * @property string[] $soortVerwerking
     */
    private $soortVerwerking = [
        
    ];

    /**
     * Adds as soortVerwerking
     *
     * @return self
     * @param string $soortVerwerking
     */
    public function addToSoortVerwerking($soortVerwerking)
    {
        $this->soortVerwerking[] = $soortVerwerking;
        return $this;
    }

    /**
     * isset soortVerwerking
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoortVerwerking($index)
    {
        return isset($this->soortVerwerking[$index]);
    }

    /**
     * unset soortVerwerking
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoortVerwerking($index)
    {
        unset($this->soortVerwerking[$index]);
    }

    /**
     * Gets as soortVerwerking
     *
     * @return string[]
     */
    public function getSoortVerwerking()
    {
        return $this->soortVerwerking;
    }

    /**
     * Sets a new soortVerwerking
     *
     * @param string $soortVerwerking
     * @return self
     */
    public function setSoortVerwerking(array $soortVerwerking = null)
    {
        $this->soortVerwerking = $soortVerwerking;
        return $this;
    }


}

