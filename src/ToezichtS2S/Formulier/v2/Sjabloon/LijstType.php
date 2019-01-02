<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing LijstType
 *
 *
 * XSD Type: Lijst
 */
class LijstType extends GegevenType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[] $gegevens
     */
    private $gegevens = null;

    /**
     * Adds as gegeven
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType $gegeven
     */
    public function addToGegevens(\ToezichtS2S\Formulier\v2\Sjabloon\GegevenType $gegeven)
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
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[]
     */
    public function getGegevens()
    {
        return $this->gegevens;
    }

    /**
     * Sets a new gegevens
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[] $gegevens
     * @return self
     */
    public function setGegevens(array $gegevens = null)
    {
        $this->gegevens = $gegevens;
        return $this;
    }


}

