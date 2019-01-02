<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing ObjectIdentificatieEnType
 *
 *
 * XSD Type: ObjectIdentificatieEnType
 */
class ObjectIdentificatieEnType extends ObjectIdentificatieType
{

    /**
     * @property string $type
     */
    private $type = null;

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

