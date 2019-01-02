<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing RechtspersoonType
 *
 *
 * XSD Type: Rechtspersoon
 */
class RechtspersoonType extends NietNatuurlijkPersoonType
{

    /**
     * @property string $rechtsvorm
     */
    private $rechtsvorm = null;

    /**
     * Gets as rechtsvorm
     *
     * @return string
     */
    public function getRechtsvorm()
    {
        return $this->rechtsvorm;
    }

    /**
     * Sets a new rechtsvorm
     *
     * @param string $rechtsvorm
     * @return self
     */
    public function setRechtsvorm(string $rechtsvorm = null)
    {
        $this->rechtsvorm = $rechtsvorm;
        return $this;
    }


}

