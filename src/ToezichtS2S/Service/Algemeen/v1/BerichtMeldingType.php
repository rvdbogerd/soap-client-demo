<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing BerichtMeldingType
 *
 *
 * XSD Type: BerichtMelding
 */
class BerichtMeldingType extends MeldingType
{

    /**
     * @property string $onderdeel
     */
    private $onderdeel = null;

    /**
     * Gets as onderdeel
     *
     * @return string
     */
    public function getOnderdeel()
    {
        return $this->onderdeel;
    }

    /**
     * Sets a new onderdeel
     *
     * @param string $onderdeel
     * @return self
     */
    public function setOnderdeel(string $onderdeel = null)
    {
        $this->onderdeel = $onderdeel;
        return $this;
    }


}

