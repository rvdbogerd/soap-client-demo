<?php

namespace ToezichtS2S\MijnRechtspraak\Model\Personen\v1;

/**
 * Class representing RegisterRegistratiesType
 *
 *
 * XSD Type: RegisterRegistraties
 */
class RegisterRegistratiesType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[] $registratie
     */
    private $registratie = [
        
    ];

    /**
     * Adds as registratie
     *
     * @return self
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType $registratie
     */
    public function addToRegistratie(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType $registratie)
    {
        $this->registratie[] = $registratie;
        return $this;
    }

    /**
     * isset registratie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistratie($index)
    {
        return isset($this->registratie[$index]);
    }

    /**
     * unset registratie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistratie($index)
    {
        unset($this->registratie[$index]);
    }

    /**
     * Gets as registratie
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[]
     */
    public function getRegistratie()
    {
        return $this->registratie;
    }

    /**
     * Sets a new registratie
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\RegisterRegistratieType[] $registratie
     * @return self
     */
    public function setRegistratie(array $registratie = null)
    {
        $this->registratie = $registratie;
        return $this;
    }


}

