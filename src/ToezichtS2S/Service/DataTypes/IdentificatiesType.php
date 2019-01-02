<?php

namespace ToezichtS2S\Service\DataTypes;

/**
 * Class representing IdentificatiesType
 *
 *
 * XSD Type: Identificaties
 */
class IdentificatiesType
{

    /**
     * @property string[] $identificatie
     */
    private $identificatie = [
        
    ];

    /**
     * Adds as identificatie
     *
     * @return self
     * @param string $identificatie
     */
    public function addToIdentificatie($identificatie)
    {
        $this->identificatie[] = $identificatie;
        return $this;
    }

    /**
     * isset identificatie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentificatie($index)
    {
        return isset($this->identificatie[$index]);
    }

    /**
     * unset identificatie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentificatie($index)
    {
        unset($this->identificatie[$index]);
    }

    /**
     * Gets as identificatie
     *
     * @return string[]
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(array $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }


}

