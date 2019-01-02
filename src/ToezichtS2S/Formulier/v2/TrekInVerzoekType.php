<?php

namespace ToezichtS2S\Formulier\v2;

use ToezichtS2S\Algemeen\v2\VerzoekType;

/**
 * Class representing TrekInVerzoekType
 *
 *
 * XSD Type: TrekInVerzoek
 */
class TrekInVerzoekType extends VerzoekType
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


}

