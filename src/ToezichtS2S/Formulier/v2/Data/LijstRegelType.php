<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing LijstRegelType
 *
 *
 * XSD Type: LijstRegel
 */
class LijstRegelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\GegevenType[] $gegevens
     */
    private $gegevens = null;

    /**
     * @property int $regelnummer
     */
    private $regelnummer = null;

    /**
     * Adds as gegeven
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven
     */
    public function addToGegevens(\ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven)
    {
        $this->gegevens[] = $gegeven;
        return $this;
    }

    /**
     * isset gegevens
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGegevens($index)
    {
        return isset($this->gegevens[$index]);
    }

    /**
     * unset gegevens
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGegevens($index)
    {
        unset($this->gegevens[$index]);
    }

    /**
     * Gets as gegevens
     *
     * @return \ToezichtS2S\Formulier\v2\Data\GegevenType[]
     */
    public function getGegevens()
    {
        return $this->gegevens;
    }

    /**
     * Sets a new gegevens
     *
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType[] $gegevens
     * @return self
     */
    public function setGegevens(array $gegevens = null)
    {
        $this->gegevens = $gegevens;
        return $this;
    }

    /**
     * Gets as regelnummer
     *
     * @return int
     */
    public function getRegelnummer()
    {
        return $this->regelnummer;
    }

    /**
     * Sets a new regelnummer
     *
     * @param int $regelnummer
     * @return self
     */
    public function setRegelnummer(int $regelnummer = null)
    {
        $this->regelnummer = $regelnummer;
        return $this;
    }


}

