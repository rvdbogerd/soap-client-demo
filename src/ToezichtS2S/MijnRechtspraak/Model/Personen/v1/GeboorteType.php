<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

use ToezichtS2S\Service\DataTypes\ExtensibleDataObjectType;

/**
 * Class representing GeboorteType
 *
 *
 * XSD Type: Geboorte
 */
class GeboorteType extends ExtensibleDataObjectType
{

    /**
     * @property string $land
     */
    private $land = null;

    /**
     * @property string $plaats
     */
    private $plaats = null;

    /**
     * Gets as land
     *
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Sets a new land
     *
     * @param string $land
     * @return self
     */
    public function setLand(string $land = null)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * Gets as plaats
     *
     * @return string
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * Sets a new plaats
     *
     * @param string $plaats
     * @return self
     */
    public function setPlaats(string $plaats = null)
    {
        $this->plaats = $plaats;
        return $this;
    }


}

