<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing FormulierSjabloonSpecificatieType
 *
 *
 * XSD Type: FormulierSjabloonSpecificatie
 */
class FormulierSjabloonSpecificatieType
{

    /**
     * @property string $titel
     */
    private $titel = null;

    /**
     * @property string $soortFormulier
     */
    private $soortFormulier = null;

    /**
     * @property bool $indicatieAanmakenMogelijk
     */
    private $indicatieAanmakenMogelijk = null;

    /**
     * @property bool $indicatieConceptMogelijk
     */
    private $indicatieConceptMogelijk = null;

    /**
     * @property string $toelichtingFormulier
     */
    private $toelichtingFormulier = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[] $gegevens
     */
    private $gegevens = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[] $relevantieregels
     */
    private $relevantieregels = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $secties
     */
    private $secties = null;

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
     * Gets as soortFormulier
     *
     * @return string
     */
    public function getSoortFormulier()
    {
        return $this->soortFormulier;
    }

    /**
     * Sets a new soortFormulier
     *
     * @param string $soortFormulier
     * @return self
     */
    public function setSoortFormulier(string $soortFormulier = null)
    {
        $this->soortFormulier = $soortFormulier;
        return $this;
    }

    /**
     * Gets as indicatieAanmakenMogelijk
     *
     * @return bool
     */
    public function getIndicatieAanmakenMogelijk()
    {
        return $this->indicatieAanmakenMogelijk;
    }

    /**
     * Sets a new indicatieAanmakenMogelijk
     *
     * @param bool $indicatieAanmakenMogelijk
     * @return self
     */
    public function setIndicatieAanmakenMogelijk(bool $indicatieAanmakenMogelijk = null)
    {
        $this->indicatieAanmakenMogelijk = $indicatieAanmakenMogelijk;
        return $this;
    }

    /**
     * Gets as indicatieConceptMogelijk
     *
     * @return bool
     */
    public function getIndicatieConceptMogelijk()
    {
        return $this->indicatieConceptMogelijk;
    }

    /**
     * Sets a new indicatieConceptMogelijk
     *
     * @param bool $indicatieConceptMogelijk
     * @return self
     */
    public function setIndicatieConceptMogelijk(bool $indicatieConceptMogelijk = null)
    {
        $this->indicatieConceptMogelijk = $indicatieConceptMogelijk;
        return $this;
    }

    /**
     * Gets as toelichtingFormulier
     *
     * @return string
     */
    public function getToelichtingFormulier()
    {
        return $this->toelichtingFormulier;
    }

    /**
     * Sets a new toelichtingFormulier
     *
     * @param string $toelichtingFormulier
     * @return self
     */
    public function setToelichtingFormulier(string $toelichtingFormulier = null)
    {
        $this->toelichtingFormulier = $toelichtingFormulier;
        return $this;
    }

    /**
     * Adds as gegeven
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType $gegeven
     */
    public function addToGegevens(\ToezichtS2S\Formulier\v2\Sjabloon\GegevenType $gegeven)
    {
        $this->gegevens[] = $gegeven;
        return $this;
    }

    /**
     * isset gegevens
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGegevens($index)
    {
        return isset($this->gegevens[$index]);
    }

    /**
     * unset gegevens
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGegevens($index)
    {
        unset($this->gegevens[$index]);
    }

    /**
     * Gets as gegevens
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[]
     */
    public function getGegevens()
    {
        return $this->gegevens;
    }

    /**
     * Sets a new gegevens
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\GegevenType[] $gegevens
     * @return self
     */
    public function setGegevens(array $gegevens = null)
    {
        $this->gegevens = $gegevens;
        return $this;
    }

    /**
     * Adds as relevantieregel
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType $relevantieregel
     */
    public function addToRelevantieregels(\ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType $relevantieregel)
    {
        $this->relevantieregels[] = $relevantieregel;
        return $this;
    }

    /**
     * isset relevantieregels
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelevantieregels($index)
    {
        return isset($this->relevantieregels[$index]);
    }

    /**
     * unset relevantieregels
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelevantieregels($index)
    {
        unset($this->relevantieregels[$index]);
    }

    /**
     * Gets as relevantieregels
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[]
     */
    public function getRelevantieregels()
    {
        return $this->relevantieregels;
    }

    /**
     * Sets a new relevantieregels
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\RelevantieregelType[] $relevantieregels
     * @return self
     */
    public function setRelevantieregels(array $relevantieregels = null)
    {
        $this->relevantieregels = $relevantieregels;
        return $this;
    }

    /**
     * Adds as sectie
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie
     */
    public function addToSecties(\ToezichtS2S\Formulier\v2\Opmaak\SectieType $sectie)
    {
        $this->secties[] = $sectie;
        return $this;
    }

    /**
     * isset secties
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecties($index)
    {
        return isset($this->secties[$index]);
    }

    /**
     * unset secties
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecties($index)
    {
        unset($this->secties[$index]);
    }

    /**
     * Gets as secties
     *
     * @return \ToezichtS2S\Formulier\v2\Opmaak\SectieType[]
     */
    public function getSecties()
    {
        return $this->secties;
    }

    /**
     * Sets a new secties
     *
     * @param \ToezichtS2S\Formulier\v2\Opmaak\SectieType[] $secties
     * @return self
     */
    public function setSecties(array $secties = null)
    {
        $this->secties = $secties;
        return $this;
    }


}

