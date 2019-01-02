<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing GeboorteDatumType
 *
 *
 * XSD Type: GeboorteDatum
 */
class GeboorteDatumType extends GeboorteType
{

    /**
     * @property \DateTime $datum
     */
    private $datum = null;

    /**
     * Gets as datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Sets a new datum
     *
     * @param \DateTime $datum
     * @return self
     */
    public function setDatum(\DateTime $datum = null)
    {
        $this->datum = $datum;
        return $this;
    }


}

