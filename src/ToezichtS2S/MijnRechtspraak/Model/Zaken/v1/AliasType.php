<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Zaken\v1;

use ToezichtS2S\MijnRechtspraak\Model\Algemeen\v1\DetailGegevensGroepType;

/**
 * Class representing AliasType
 *
 *
 * XSD Type: Alias
 */
class AliasType extends DetailGegevensGroepType
{

    /**
     * @property string $nummer
     */
    private $nummer = null;

    /**
     * Gets as nummer
     *
     * @return string
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * Sets a new nummer
     *
     * @param string $nummer
     * @return self
     */
    public function setNummer(string $nummer = null)
    {
        $this->nummer = $nummer;
        return $this;
    }


}

