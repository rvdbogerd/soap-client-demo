<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing ArrayOfMogelijkeWaardeType
 *
 *
 * XSD Type: ArrayOfMogelijkeWaarde
 */
class ArrayOfMogelijkeWaardeType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[] $mogelijkeWaarde
     */
    private $mogelijkeWaarde = [
        
    ];

    /**
     * Adds as mogelijkeWaarde
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType $mogelijkeWaarde
     */
    public function addToMogelijkeWaarde(\ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType $mogelijkeWaarde)
    {
        $this->mogelijkeWaarde[] = $mogelijkeWaarde;
        return $this;
    }

    /**
     * isset mogelijkeWaarde
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMogelijkeWaarde($index)
    {
        return isset($this->mogelijkeWaarde[$index]);
    }

    /**
     * unset mogelijkeWaarde
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMogelijkeWaarde($index)
    {
        unset($this->mogelijkeWaarde[$index]);
    }

    /**
     * Gets as mogelijkeWaarde
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[]
     */
    public function getMogelijkeWaarde()
    {
        return $this->mogelijkeWaarde;
    }

    /**
     * Sets a new mogelijkeWaarde
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\MogelijkeWaardeType[] $mogelijkeWaarde
     * @return self
     */
    public function setMogelijkeWaarde(array $mogelijkeWaarde = null)
    {
        $this->mogelijkeWaarde = $mogelijkeWaarde;
        return $this;
    }


}

