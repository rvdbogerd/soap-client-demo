<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing DatumTijdType
 *
 *
 * XSD Type: DatumTijd
 */
class DatumTijdType extends GegevenType
{

    /**
     * @property bool $indicatieDatum
     */
    private $indicatieDatum = null;

    /**
     * Gets as indicatieDatum
     *
     * @return bool
     */
    public function getIndicatieDatum()
    {
        return $this->indicatieDatum;
    }

    /**
     * Sets a new indicatieDatum
     *
     * @param bool $indicatieDatum
     * @return self
     */
    public function setIndicatieDatum(bool $indicatieDatum = null)
    {
        $this->indicatieDatum = $indicatieDatum;
        return $this;
    }


}

