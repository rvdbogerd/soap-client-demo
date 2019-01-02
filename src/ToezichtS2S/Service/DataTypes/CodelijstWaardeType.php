<?php

namespace ToezichtS2S\Service\DataTypes;

/**
 * Class representing CodelijstWaardeType
 *
 *
 * XSD Type: CodelijstWaarde
 */
class CodelijstWaardeType
{

    /**
     * @property \DateTime $geldigTotEnMet
     */
    private $geldigTotEnMet = null;

    /**
     * @property \DateTime $geldigVanaf
     */
    private $geldigVanaf = null;

    /**
     * @property string $titel
     */
    private $titel = null;

    /**
     * @property string $waarde
     */
    private $waarde = null;

    /**
     * Gets as geldigTotEnMet
     *
     * @return \DateTime
     */
    public function getGeldigTotEnMet()
    {
        return $this->geldigTotEnMet;
    }

    /**
     * Sets a new geldigTotEnMet
     *
     * @param \DateTime $geldigTotEnMet
     * @return self
     */
    public function setGeldigTotEnMet(\DateTime $geldigTotEnMet = null)
    {
        $this->geldigTotEnMet = $geldigTotEnMet;
        return $this;
    }

    /**
     * Gets as geldigVanaf
     *
     * @return \DateTime
     */
    public function getGeldigVanaf()
    {
        return $this->geldigVanaf;
    }

    /**
     * Sets a new geldigVanaf
     *
     * @param \DateTime $geldigVanaf
     * @return self
     */
    public function setGeldigVanaf(\DateTime $geldigVanaf = null)
    {
        $this->geldigVanaf = $geldigVanaf;
        return $this;
    }

    /**
     * Gets as titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets a new titel
     *
     * @param string $titel
     * @return self
     */
    public function setTitel(string $titel = null)
    {
        $this->titel = $titel;
        return $this;
    }

    /**
     * Gets as waarde
     *
     * @return string
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * Sets a new waarde
     *
     * @param string $waarde
     * @return self
     */
    public function setWaarde(string $waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }


}

