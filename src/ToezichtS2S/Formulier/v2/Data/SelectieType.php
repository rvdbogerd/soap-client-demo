<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing SelectieType
 *
 *
 * XSD Type: Selectie
 */
class SelectieType extends WaardeType
{

    /**
     * @property string[] $waarde
     */
    private $waarde = null;

    /**
     * Adds as string
     *
     * @return self
     * @param string $string
     */
    public function addToWaarde($string)
    {
        $this->waarde[] = $string;
        return $this;
    }

    /**
     * isset waarde
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWaarde($index)
    {
        return isset($this->waarde[$index]);
    }

    /**
     * unset waarde
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWaarde($index)
    {
        unset($this->waarde[$index]);
    }

    /**
     * Gets as waarde
     *
     * @return string[]
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * Sets a new waarde
     *
     * @param string[] $waarde
     * @return self
     */
    public function setWaarde(array $waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }


}

