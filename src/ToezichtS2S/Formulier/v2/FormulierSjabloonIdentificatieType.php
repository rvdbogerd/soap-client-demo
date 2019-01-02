<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\ObjectIdentificatieEnVersieType;

/**
 * Class representing FormulierSjabloonIdentificatieType
 *
 *
 * XSD Type: FormulierSjabloonIdentificatie
 */
class FormulierSjabloonIdentificatieType extends ObjectIdentificatieEnVersieType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\DatumTijdType $beginDatum
     */
    private $beginDatum = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\DatumTijdType $eindDatum
     */
    private $eindDatum = null;

    /**
     * @property string $titel
     */
    private $titel = null;

    /**
     * Gets as beginDatum
     *
     * @return \ToezichtS2S\Formulier\v2\Data\DatumTijdType
     */
    public function getBeginDatum()
    {
        return $this->beginDatum;
    }

    /**
     * Sets a new beginDatum
     *
     * @param \ToezichtS2S\Formulier\v2\Data\DatumTijdType $beginDatum
     * @return self
     */
    public function setBeginDatum(\ToezichtS2S\Formulier\v2\Data\DatumTijdType $beginDatum = null)
    {
        $this->beginDatum = $beginDatum;
        return $this;
    }

    /**
     * Gets as eindDatum
     *
     * @return \ToezichtS2S\Formulier\v2\Data\DatumTijdType
     */
    public function getEindDatum()
    {
        return $this->eindDatum;
    }

    /**
     * Sets a new eindDatum
     *
     * @param \ToezichtS2S\Formulier\v2\Data\DatumTijdType $eindDatum
     * @return self
     */
    public function setEindDatum(\ToezichtS2S\Formulier\v2\Data\DatumTijdType $eindDatum = null)
    {
        $this->eindDatum = $eindDatum;
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


}

