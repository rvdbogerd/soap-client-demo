<?php

namespace ToezichtS2S\Service\Metadata\v1;

use ToezichtS2S\Service\Algemeen\v1\VerzoekType;

/**
 * Class representing RaadpleegCodelijstRelatieVerzoekType
 *
 *
 * XSD Type: RaadpleegCodelijstRelatieVerzoek
 */
class RaadpleegCodelijstRelatieVerzoekType extends VerzoekType
{

    /**
     * @property string $identificatie1
     */
    private $identificatie1 = null;

    /**
     * @property string $identificatie2
     */
    private $identificatie2 = null;

    /**
     * Gets as identificatie1
     *
     * @return string
     */
    public function getIdentificatie1()
    {
        return $this->identificatie1;
    }

    /**
     * Sets a new identificatie1
     *
     * @param string $identificatie1
     * @return self
     */
    public function setIdentificatie1(string $identificatie1 = null)
    {
        $this->identificatie1 = $identificatie1;
        return $this;
    }

    /**
     * Gets as identificatie2
     *
     * @return string
     */
    public function getIdentificatie2()
    {
        return $this->identificatie2;
    }

    /**
     * Sets a new identificatie2
     *
     * @param string $identificatie2
     * @return self
     */
    public function setIdentificatie2(string $identificatie2 = null)
    {
        $this->identificatie2 = $identificatie2;
        return $this;
    }


}

