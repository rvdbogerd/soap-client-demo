<?php

namespace ToezichtS2S\Bericht\v2;

use ToezichtS2S\Algemeen\v2\ObjectIdentificatieType;

/**
 * Class representing BerichtDetailType
 *
 *
 * XSD Type: BerichtDetail
 */
class BerichtDetailType extends ObjectIdentificatieType
{

    /**
     * @property string $aan
     */
    private $aan = null;

    /**
     * @property string $auteur
     */
    private $auteur = null;

    /**
     * @property \ToezichtS2S\Algemeen\v2\ObjectReferentieType $behoortBij
     */
    private $behoortBij = null;

    /**
     * @property \ToezichtS2S\Bericht\v2\BerichtBijlageType[] $bijlagen
     */
    private $bijlagen = null;

    /**
     * @property \DateTime $datumOntvangen
     */
    private $datumOntvangen = null;

    /**
     * @property \ToezichtS2S\Bericht\v2\BerichtReferentieType $inAntwoordOp
     */
    private $inAntwoordOp = null;

    /**
     * @property bool $indicatieSpoed
     */
    private $indicatieSpoed = null;

    /**
     * @property bool $indicatieVertrouwelijk
     */
    private $indicatieVertrouwelijk = null;

    /**
     * @property string $inhoud
     */
    private $inhoud = null;

    /**
     * @property string $onderwerp
     */
    private $onderwerp = null;

    /**
     * Gets as aan
     *
     * @return string
     */
    public function getAan()
    {
        return $this->aan;
    }

    /**
     * Sets a new aan
     *
     * @param string $aan
     * @return self
     */
    public function setAan(string $aan = null)
    {
        $this->aan = $aan;
        return $this;
    }

    /**
     * Gets as auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Sets a new auteur
     *
     * @param string $auteur
     * @return self
     */
    public function setAuteur(string $auteur = null)
    {
        $this->auteur = $auteur;
        return $this;
    }

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
     * Adds as berichtBijlage
     *
     * @return self
     * @param \ToezichtS2S\Bericht\v2\BerichtBijlageType $berichtBijlage
     */
    public function addToBijlagen(\ToezichtS2S\Bericht\v2\BerichtBijlageType $berichtBijlage)
    {
        $this->bijlagen[] = $berichtBijlage;
        return $this;
    }

    /**
     * isset bijlagen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBijlagen($index)
    {
        return isset($this->bijlagen[$index]);
    }

    /**
     * unset bijlagen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBijlagen($index)
    {
        unset($this->bijlagen[$index]);
    }

    /**
     * Gets as bijlagen
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtBijlageType[]
     */
    public function getBijlagen()
    {
        return $this->bijlagen;
    }

    /**
     * Sets a new bijlagen
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtBijlageType[] $bijlagen
     * @return self
     */
    public function setBijlagen(array $bijlagen = null)
    {
        $this->bijlagen = $bijlagen;
        return $this;
    }

    /**
     * Gets as datumOntvangen
     *
     * @return \DateTime
     */
    public function getDatumOntvangen()
    {
        return $this->datumOntvangen;
    }

    /**
     * Sets a new datumOntvangen
     *
     * @param \DateTime $datumOntvangen
     * @return self
     */
    public function setDatumOntvangen(\DateTime $datumOntvangen = null)
    {
        $this->datumOntvangen = $datumOntvangen;
        return $this;
    }

    /**
     * Gets as inAntwoordOp
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtReferentieType
     */
    public function getInAntwoordOp()
    {
        return $this->inAntwoordOp;
    }

    /**
     * Sets a new inAntwoordOp
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtReferentieType $inAntwoordOp
     * @return self
     */
    public function setInAntwoordOp(\ToezichtS2S\Bericht\v2\BerichtReferentieType $inAntwoordOp = null)
    {
        $this->inAntwoordOp = $inAntwoordOp;
        return $this;
    }

    /**
     * Gets as indicatieSpoed
     *
     * @return bool
     */
    public function getIndicatieSpoed()
    {
        return $this->indicatieSpoed;
    }

    /**
     * Sets a new indicatieSpoed
     *
     * @param bool $indicatieSpoed
     * @return self
     */
    public function setIndicatieSpoed(bool $indicatieSpoed = null)
    {
        $this->indicatieSpoed = $indicatieSpoed;
        return $this;
    }

    /**
     * Gets as indicatieVertrouwelijk
     *
     * @return bool
     */
    public function getIndicatieVertrouwelijk()
    {
        return $this->indicatieVertrouwelijk;
    }

    /**
     * Sets a new indicatieVertrouwelijk
     *
     * @param bool $indicatieVertrouwelijk
     * @return self
     */
    public function setIndicatieVertrouwelijk(bool $indicatieVertrouwelijk = null)
    {
        $this->indicatieVertrouwelijk = $indicatieVertrouwelijk;
        return $this;
    }

    /**
     * Gets as inhoud
     *
     * @return string
     */
    public function getInhoud()
    {
        return $this->inhoud;
    }

    /**
     * Sets a new inhoud
     *
     * @param string $inhoud
     * @return self
     */
    public function setInhoud(string $inhoud = null)
    {
        $this->inhoud = $inhoud;
        return $this;
    }

    /**
     * Gets as onderwerp
     *
     * @return string
     */
    public function getOnderwerp()
    {
        return $this->onderwerp;
    }

    /**
     * Sets a new onderwerp
     *
     * @param string $onderwerp
     * @return self
     */
    public function setOnderwerp(string $onderwerp = null)
    {
        $this->onderwerp = $onderwerp;
        return $this;
    }


}

