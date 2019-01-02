<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing ObjectMeldingType
 *
 *
 * XSD Type: ObjectMelding
 */
class ObjectMeldingType extends MeldingType
{

    /**
     * @property string $identificatie
     */
    private $identificatie = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as identificatie
     *
     * @return string
     */
    public function getIdentificatie()
    {
        return $this->identificatie;
    }

    /**
     * Sets a new identificatie
     *
     * @param string $identificatie
     * @return self
     */
    public function setIdentificatie(string $identificatie = null)
    {
        $this->identificatie = $identificatie;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type = null)
    {
        $this->type = $type;
        return $this;
    }


}

