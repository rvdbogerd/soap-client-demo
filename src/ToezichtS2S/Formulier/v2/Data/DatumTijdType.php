<?php

namespace ToezichtS2S\Formulier\v2\Data;

/**
 * Class representing DatumTijdType
 *
 *
 * XSD Type: DatumTijd
 */
class DatumTijdType extends EnkelvoudigeWaardeType
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

