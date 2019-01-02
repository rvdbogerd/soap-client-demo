<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing AdresType
 *
 *
 * XSD Type: Adres
 */
class AdresType extends ExtensibleDataObjectType
{

    /**
     * @property string $soortAdres
     */
    private $soortAdres = null;

    /**
     * Gets as soortAdres
     *
     * @return string
     */
    public function getSoortAdres()
    {
        return $this->soortAdres;
    }

    /**
     * Sets a new soortAdres
     *
     * @param string $soortAdres
     * @return self
     */
    public function setSoortAdres(string $soortAdres = null)
    {
        $this->soortAdres = $soortAdres;
        return $this;
    }


}

