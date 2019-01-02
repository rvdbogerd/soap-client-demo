<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing BuitenlandsAdresType
 *
 *
 * XSD Type: BuitenlandsAdres
 */
class BuitenlandsAdresType extends AdresType
{

    /**
     * @property string $land
     */
    private $land = null;

    /**
     * @property string $regel1
     */
    private $regel1 = null;

    /**
     * @property string $regel2
     */
    private $regel2 = null;

    /**
     * @property string $regel3
     */
    private $regel3 = null;

    /**
     * @property string $regel4
     */
    private $regel4 = null;

    /**
     * @property string $regel5
     */
    private $regel5 = null;

    /**
     * @property string $regel6
     */
    private $regel6 = null;

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
     * Gets as regel1
     *
     * @return string
     */
    public function getRegel1()
    {
        return $this->regel1;
    }

    /**
     * Sets a new regel1
     *
     * @param string $regel1
     * @return self
     */
    public function setRegel1(string $regel1 = null)
    {
        $this->regel1 = $regel1;
        return $this;
    }

    /**
     * Gets as regel2
     *
     * @return string
     */
    public function getRegel2()
    {
        return $this->regel2;
    }

    /**
     * Sets a new regel2
     *
     * @param string $regel2
     * @return self
     */
    public function setRegel2(string $regel2 = null)
    {
        $this->regel2 = $regel2;
        return $this;
    }

    /**
     * Gets as regel3
     *
     * @return string
     */
    public function getRegel3()
    {
        return $this->regel3;
    }

    /**
     * Sets a new regel3
     *
     * @param string $regel3
     * @return self
     */
    public function setRegel3(string $regel3 = null)
    {
        $this->regel3 = $regel3;
        return $this;
    }

    /**
     * Gets as regel4
     *
     * @return string
     */
    public function getRegel4()
    {
        return $this->regel4;
    }

    /**
     * Sets a new regel4
     *
     * @param string $regel4
     * @return self
     */
    public function setRegel4(string $regel4 = null)
    {
        $this->regel4 = $regel4;
        return $this;
    }

    /**
     * Gets as regel5
     *
     * @return string
     */
    public function getRegel5()
    {
        return $this->regel5;
    }

    /**
     * Sets a new regel5
     *
     * @param string $regel5
     * @return self
     */
    public function setRegel5(string $regel5 = null)
    {
        $this->regel5 = $regel5;
        return $this;
    }

    /**
     * Gets as regel6
     *
     * @return string
     */
    public function getRegel6()
    {
        return $this->regel6;
    }

    /**
     * Sets a new regel6
     *
     * @param string $regel6
     * @return self
     */
    public function setRegel6(string $regel6 = null)
    {
        $this->regel6 = $regel6;
        return $this;
    }


}

