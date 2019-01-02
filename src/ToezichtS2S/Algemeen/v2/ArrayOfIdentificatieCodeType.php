<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ArrayOfIdentificatieCodeType
 *
 *
 * XSD Type: ArrayOfIdentificatieCode
 */
class ArrayOfIdentificatieCodeType
{

    /**
     * @property string[] $identificatieCode
     */
    private $identificatieCode = [
        
    ];

    /**
     * Adds as identificatieCode
     *
     * @return self
     * @param string $identificatieCode
     */
    public function addToIdentificatieCode($identificatieCode)
    {
        $this->identificatieCode[] = $identificatieCode;
        return $this;
    }

    /**
     * isset identificatieCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentificatieCode($index)
    {
        return isset($this->identificatieCode[$index]);
    }

    /**
     * unset identificatieCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentificatieCode($index)
    {
        unset($this->identificatieCode[$index]);
    }

    /**
     * Gets as identificatieCode
     *
     * @return string[]
     */
    public function getIdentificatieCode()
    {
        return $this->identificatieCode;
    }

    /**
     * Sets a new identificatieCode
     *
     * @param string $identificatieCode
     * @return self
     */
    public function setIdentificatieCode(array $identificatieCode = null)
    {
        $this->identificatieCode = $identificatieCode;
        return $this;
    }


}

