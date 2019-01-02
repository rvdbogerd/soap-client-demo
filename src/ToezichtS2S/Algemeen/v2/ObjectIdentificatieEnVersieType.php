<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ObjectIdentificatieEnVersieType
 *
 *
 * XSD Type: ObjectIdentificatieEnVersie
 */
class ObjectIdentificatieEnVersieType extends ObjectIdentificatieType
{

    /**
     * @property int $modelVersie
     */
    private $modelVersie = null;

    /**
     * Gets as modelVersie
     *
     * @return int
     */
    public function getModelVersie()
    {
        return $this->modelVersie;
    }

    /**
     * Sets a new modelVersie
     *
     * @param int $modelVersie
     * @return self
     */
    public function setModelVersie(int $modelVersie = null)
    {
        $this->modelVersie = $modelVersie;
        return $this;
    }


}

