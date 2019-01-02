<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing SelectieType
 *
 *
 * XSD Type: Selectie
 */
class SelectieType extends GegevenType
{

    /**
     * @property bool $indicatieMeerkeuze
     */
    private $indicatieMeerkeuze = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[] $mogelijkeWaarden
     */
    private $mogelijkeWaarden = null;

    /**
     * Gets as indicatieMeerkeuze
     *
     * @return bool
     */
    public function getIndicatieMeerkeuze()
    {
        return $this->indicatieMeerkeuze;
    }

    /**
     * Sets a new indicatieMeerkeuze
     *
     * @param bool $indicatieMeerkeuze
     * @return self
     */
    public function setIndicatieMeerkeuze(bool $indicatieMeerkeuze = null)
    {
        $this->indicatieMeerkeuze = $indicatieMeerkeuze;
        return $this;
    }

    /**
     * Adds as mogelijkeWaarde
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType $mogelijkeWaarde
     */
    public function addToMogelijkeWaarden(\ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType $mogelijkeWaarde)
    {
        $this->mogelijkeWaarden[] = $mogelijkeWaarde;
        return $this;
    }

    /**
     * isset mogelijkeWaarden
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMogelijkeWaarden($index)
    {
        return isset($this->mogelijkeWaarden[$index]);
    }

    /**
     * unset mogelijkeWaarden
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMogelijkeWaarden($index)
    {
        unset($this->mogelijkeWaarden[$index]);
    }

    /**
     * Gets as mogelijkeWaarden
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[]
     */
    public function getMogelijkeWaarden()
    {
        return $this->mogelijkeWaarden;
    }

    /**
     * Sets a new mogelijkeWaarden
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[] $mogelijkeWaarden
     * @return self
     */
    public function setMogelijkeWaarden(array $mogelijkeWaarden = null)
    {
        $this->mogelijkeWaarden = $mogelijkeWaarden;
        return $this;
    }


}

