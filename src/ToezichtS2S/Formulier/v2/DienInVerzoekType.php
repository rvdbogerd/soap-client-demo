<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing DienInVerzoekType
 *
 *
 * XSD Type: DienInVerzoek
 */
class DienInVerzoekType extends VerzoekType
{

    /**
     * @property string $formulier
     */
    private $formulier = null;

    /**
     * @property string $volgnummer
     */
    private $volgnummer = null;

    /**
     * @property string $formulierSjabloon
     */
    private $formulierSjabloon = null;

    /**
     * @property int $modelVersie
     */
    private $modelVersie = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property bool $indicatieConcept
     */
    private $indicatieConcept = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\GegevenType[] $waarden
     */
    private $waarden = null;

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
     * Gets as volgnummer
     *
     * @return string
     */
    public function getVolgnummer()
    {
        return $this->volgnummer;
    }

    /**
     * Sets a new volgnummer
     *
     * @param string $volgnummer
     * @return self
     */
    public function setVolgnummer(string $volgnummer = null)
    {
        $this->volgnummer = $volgnummer;
        return $this;
    }

    /**
     * Gets as formulierSjabloon
     *
     * @return string
     */
    public function getFormulierSjabloon()
    {
        return $this->formulierSjabloon;
    }

    /**
     * Sets a new formulierSjabloon
     *
     * @param string $formulierSjabloon
     * @return self
     */
    public function setFormulierSjabloon(string $formulierSjabloon = null)
    {
        $this->formulierSjabloon = $formulierSjabloon;
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
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij
     * @return self
     */
    public function setBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnType $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Gets as indicatieConcept
     *
     * @return bool
     */
    public function getIndicatieConcept()
    {
        return $this->indicatieConcept;
    }

    /**
     * Sets a new indicatieConcept
     *
     * @param bool $indicatieConcept
     * @return self
     */
    public function setIndicatieConcept(bool $indicatieConcept = null)
    {
        $this->indicatieConcept = $indicatieConcept;
        return $this;
    }

    /**
     * Adds as gegeven
     *
     * @return self
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven
     */
    public function addToWaarden(\ToezichtS2S\Formulier\v2\Data\GegevenType $gegeven)
    {
        $this->waarden[] = $gegeven;
        return $this;
    }

    /**
     * isset waarden
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWaarden($index)
    {
        return isset($this->waarden[$index]);
    }

    /**
     * unset waarden
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWaarden($index)
    {
        unset($this->waarden[$index]);
    }

    /**
     * Gets as waarden
     *
     * @return \ToezichtS2S\Formulier\v2\Data\GegevenType[]
     */
    public function getWaarden()
    {
        return $this->waarden;
    }

    /**
     * Sets a new waarden
     *
     * @param \ToezichtS2S\Formulier\v2\Data\GegevenType[] $waarden
     * @return self
     */
    public function setWaarden(array $waarden = null)
    {
        $this->waarden = $waarden;
        return $this;
    }


}

