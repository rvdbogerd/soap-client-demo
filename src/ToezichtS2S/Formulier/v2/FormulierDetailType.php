<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing FormulierDetailType
 *
 *
 * XSD Type: FormulierDetail
 */
class FormulierDetailType
{

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property \DateTime $datumIngediend
     */
    private $datumIngediend = null;

    /**
     * @property \DateTime $datumLaatstIngediend
     */
    private $datumLaatstIngediend = null;

    /**
     * @property string[] $toegestaneVerwerking
     */
    private $toegestaneVerwerking = null;

    /**
     * @property string $volgnummer
     */
    private $volgnummer = null;

    /**
     * @property string $voorgaandFormulierIdentificatie
     */
    private $voorgaandFormulierIdentificatie = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\GegevenType[] $waarden
     */
    private $waarden = null;

    /**
     * Gets as behoortBij
     *
     * @return \ToezichtS2S\Algemeen\v2\ObjectReferentieType
     */
    public function getBehoortBij()
    {
        return $this->behoortBij;
    }

    /**
     * Sets a new behoortBij
     *
     * @param \ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij
     * @return self
     */
    public function setBehoortBij(\ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij = null)
    {
        $this->behoortBij = $behoortBij;
        return $this;
    }

    /**
     * Gets as datumIngediend
     *
     * @return \DateTime
     */
    public function getDatumIngediend()
    {
        return $this->datumIngediend;
    }

    /**
     * Sets a new datumIngediend
     *
     * @param \DateTime $datumIngediend
     * @return self
     */
    public function setDatumIngediend(\DateTime $datumIngediend = null)
    {
        $this->datumIngediend = $datumIngediend;
        return $this;
    }

    /**
     * Gets as datumLaatstIngediend
     *
     * @return \DateTime
     */
    public function getDatumLaatstIngediend()
    {
        return $this->datumLaatstIngediend;
    }

    /**
     * Sets a new datumLaatstIngediend
     *
     * @param \DateTime $datumLaatstIngediend
     * @return self
     */
    public function setDatumLaatstIngediend(\DateTime $datumLaatstIngediend = null)
    {
        $this->datumLaatstIngediend = $datumLaatstIngediend;
        return $this;
    }

    /**
     * Adds as soortVerwerking
     *
     * @return self
     * @param string $soortVerwerking
     */
    public function addToToegestaneVerwerking($soortVerwerking)
    {
        $this->toegestaneVerwerking[] = $soortVerwerking;
        return $this;
    }

    /**
     * isset toegestaneVerwerking
     *
     * @param int|string $index
     * @return bool
     */
    public function issetToegestaneVerwerking($index)
    {
        return isset($this->toegestaneVerwerking[$index]);
    }

    /**
     * unset toegestaneVerwerking
     *
     * @param int|string $index
     * @return void
     */
    public function unsetToegestaneVerwerking($index)
    {
        unset($this->toegestaneVerwerking[$index]);
    }

    /**
     * Gets as toegestaneVerwerking
     *
     * @return string[]
     */
    public function getToegestaneVerwerking()
    {
        return $this->toegestaneVerwerking;
    }

    /**
     * Sets a new toegestaneVerwerking
     *
     * @param string $toegestaneVerwerking
     * @return self
     */
    public function setToegestaneVerwerking(array $toegestaneVerwerking = null)
    {
        $this->toegestaneVerwerking = $toegestaneVerwerking;
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
     * Gets as voorgaandFormulierIdentificatie
     *
     * @return string
     */
    public function getVoorgaandFormulierIdentificatie()
    {
        return $this->voorgaandFormulierIdentificatie;
    }

    /**
     * Sets a new voorgaandFormulierIdentificatie
     *
     * @param string $voorgaandFormulierIdentificatie
     * @return self
     */
    public function setVoorgaandFormulierIdentificatie(string $voorgaandFormulierIdentificatie = null)
    {
        $this->voorgaandFormulierIdentificatie = $voorgaandFormulierIdentificatie;
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

