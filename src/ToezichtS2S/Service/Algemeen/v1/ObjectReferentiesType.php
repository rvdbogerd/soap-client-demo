<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing ObjectReferentiesType
 *
 *
 * XSD Type: ObjectReferenties
 */
class ObjectReferentiesType
{

    /**
     * @property \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[] $objectReferentie
     */
    private $objectReferentie = [
        
    ];

    /**
     * Adds as objectReferentie
     *
     * @return self
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType $objectReferentie
     */
    public function addToObjectReferentie(\ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType $objectReferentie)
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
     * @return \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[]
     */
    public function getObjectReferentie()
    {
        return $this->objectReferentie;
    }

    /**
     * Sets a new objectReferentie
     *
     * @param \ToezichtS2S\Service\Algemeen\v1\ObjectReferentieType[] $objectReferentie
     * @return self
     */
    public function setObjectReferentie(array $objectReferentie = null)
    {
        $this->objectReferentie = $objectReferentie;
        return $this;
    }


}

