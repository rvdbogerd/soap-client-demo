<?php

namespace ToezichtS2S\Formulier\v2\Opmaak;

/**
 * Class representing TekstElementType
 *
 *
 * XSD Type: TekstElement
 */
class TekstElementType extends ElementType
{

    /**
     * @property bool $indicatieKopje
     */
    private $indicatieKopje = null;

    /**
     * @property string $tekst
     */
    private $tekst = null;

    /**
     * Gets as indicatieKopje
     *
     * @return bool
     */
    public function getIndicatieKopje()
    {
        return $this->indicatieKopje;
    }

    /**
     * Sets a new indicatieKopje
     *
     * @param bool $indicatieKopje
     * @return self
     */
    public function setIndicatieKopje(bool $indicatieKopje = null)
    {
        $this->indicatieKopje = $indicatieKopje;
        return $this;
    }

    /**
     * Gets as tekst
     *
     * @return string
     */
    public function getTekst()
    {
        return $this->tekst;
    }

    /**
     * Sets a new tekst
     *
     * @param string $tekst
     * @return self
     */
    public function setTekst(string $tekst = null)
    {
        $this->tekst = $tekst;
        return $this;
    }


}

