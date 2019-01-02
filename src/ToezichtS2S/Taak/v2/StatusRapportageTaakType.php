<?php

namespace ToezichtS2S\Taak\v2;

/**
 * Class representing StatusRapportageTaakType
 *
 *
 * XSD Type: StatusRapportageTaak
 */
class StatusRapportageTaakType extends TaakDetailType
{

    /**
     * @property \DateTime $peildatum
     */
    private $peildatum = null;

    /**
     * Gets as peildatum
     *
     * @return \DateTime
     */
    public function getPeildatum()
    {
        return $this->peildatum;
    }

    /**
     * Sets a new peildatum
     *
     * @param \DateTime $peildatum
     * @return self
     */
    public function setPeildatum(\DateTime $peildatum = null)
    {
        $this->peildatum = $peildatum;
        return $this;
    }


}

