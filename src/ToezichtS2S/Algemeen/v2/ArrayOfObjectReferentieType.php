<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ArrayOfObjectReferentieType
 *
 *
 * XSD Type: ArrayOfObjectReferentie
 */
class ArrayOfObjectReferentieType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieType[] $objectReferentie
     */
    private $objectReferentie = [
        
    ];

    /**
     * Adds as objectReferentie
     *
     * @return self
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType $objectReferentie
     */
    public function addToObjectReferentie(\ToezichtS2S\Algemeen\v2\ObjectReferentieType $objectReferentie)
    {
        $this->objectReferentie[] = $objectReferentie;
        return $this;
    }

    /**
     * isset objectReferentie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObjectReferentie($index)
    {
        return isset($this->objectReferentie[$index]);
    }

    /**
     * unset objectReferentie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObjectReferentie($index)
    {
        unset($this->objectReferentie[$index]);
    }

    /**
     * Gets as objectReferentie
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectReferentieType[]
     */
    public function getObjectReferentie()
    {
        return $this->objectReferentie;
    }

    /**
     * Sets a new objectReferentie
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType[] $objectReferentie
     * @return self
     */
    public function setObjectReferentie(array $objectReferentie = null)
    {
        $this->objectReferentie = $objectReferentie;
        return $this;
    }


}

