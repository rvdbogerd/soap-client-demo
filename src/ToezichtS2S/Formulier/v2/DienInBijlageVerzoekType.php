<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing DienInBijlageVerzoekType
 *
 *
 * XSD Type: DienInBijlageVerzoek
 */
class DienInBijlageVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     */
    private $bijlage = null;

    /**
     * @property string $formulier
     */
    private $formulier = null;

    /**
     * @property string $gegeven
     */
    private $gegeven = null;

    /**
     * @property int $modelVersie
     */
    private $modelVersie = null;

    /**
     * @property int $regelnummer
     */
    private $regelnummer = null;

    /**
     * Gets as bijlage
     *
     * @return \ToezichtS2S\Algemeen\v2\BijlageType
     */
    public function getBijlage()
    {
        return $this->bijlage;
    }

    /**
     * Sets a new bijlage
     *
     * @param \ToezichtS2S\Algemeen\v2\BijlageType $bijlage
     * @return self
     */
    public function setBijlage(\ToezichtS2S\Algemeen\v2\BijlageType $bijlage = null)
    {
        $this->bijlage = $bijlage;
        return $this;
    }

    /**
     * Gets as formulier
     *
     * @return string
     */
    public function getFormulier()
    {
        return $this->formulier;
    }

    /**
     * Sets a new formulier
     *
     * @param string $formulier
     * @return self
     */
    public function setFormulier(string $formulier = null)
    {
        $this->formulier = $formulier;
        return $this;
    }

    /**
     * Gets as gegeven
     *
     * @return string
     */
    public function getGegeven()
    {
        return $this->gegeven;
    }

    /**
     * Sets a new gegeven
     *
     * @param string $gegeven
     * @return self
     */
    public function setGegeven(string $gegeven = null)
    {
        $this->gegeven = $gegeven;
        return $this;
    }

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

    /**
     * Gets as regelnummer
     *
     * @return int
     */
    public function getRegelnummer()
    {
        return $this->regelnummer;
    }

    /**
     * Sets a new regelnummer
     *
     * @param int $regelnummer
     * @return self
     */
    public function setRegelnummer(int $regelnummer = null)
    {
        $this->regelnummer = $regelnummer;
        return $this;
    }


}

