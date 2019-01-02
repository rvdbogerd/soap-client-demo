<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing ArrayOfSectieType
 *
 *
 * XSD Type: ArrayOfSectie
 */
class ArrayOfSectieType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $sectie
     */
    private $sectie = [
        
    ];

    /**
     * Adds as sectie
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie
     */
    public function addToSectie(\ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie)
    {
        $this->sectie[] = $sectie;
        return $this;
    }

    /**
     * isset sectie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSectie($index)
    {
        return isset($this->sectie[$index]);
    }

    /**
     * unset sectie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSectie($index)
    {
        unset($this->sectie[$index]);
    }

    /**
     * Gets as sectie
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\SectieType[]
     */
    public function getSectie()
    {
        return $this->sectie;
    }

    /**
     * Sets a new sectie
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $sectie
     * @return self
     */
    public function setSectie(array $sectie = null)
    {
        $this->sectie = $sectie;
        return $this;
    }


}

