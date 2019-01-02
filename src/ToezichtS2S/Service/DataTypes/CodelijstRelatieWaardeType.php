<?php

namespace ToezichtS2S\Service\DataTypes;

/**
 * Class representing CodelijstRelatieWaardeType
 *
 *
 * XSD Type: CodelijstRelatieWaarde
 */
class CodelijstRelatieWaardeType
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
     * @property string $waarde1
     */
    private $waarde1 = null;

    /**
     * @property string $waarde2
     */
    private $waarde2 = null;

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
     * Gets as waarde1
     *
     * @return string
     */
    public function getWaarde1()
    {
        return $this->waarde1;
    }

    /**
     * Sets a new waarde1
     *
     * @param string $waarde1
     * @return self
     */
    public function setWaarde1(string $waarde1 = null)
    {
        $this->waarde1 = $waarde1;
        return $this;
    }

    /**
     * Gets as waarde2
     *
     * @return string
     */
    public function getWaarde2()
    {
        return $this->waarde2;
    }

    /**
     * Sets a new waarde2
     *
     * @param string $waarde2
     * @return self
     */
    public function setWaarde2(string $waarde2 = null)
    {
        $this->waarde2 = $waarde2;
        return $this;
    }


}

