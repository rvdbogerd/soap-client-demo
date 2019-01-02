<?php

namespace ToezichtS2S\MijnRechtspraak\Service\Zaken\v1;

use ToezichtS2S\Service\Algemeen\v1\VerzoekType;

/**
 * Class representing WijzigBetrokkenPersoonVerzoekType
 *
 *
 * XSD Type: WijzigBetrokkenPersoonVerzoek
 */
class WijzigBetrokkenPersoonVerzoekType extends VerzoekType
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $huidigBetrokkenPersoon
     */
    private $huidigBetrokkenPersoon = null;

    /**
     * @property \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $nieuwBetrokkenPersoon
     */
    private $nieuwBetrokkenPersoon = null;

    /**
     * @property string $rol
     */
    private $rol = null;

    /**
     * @property string $zaakIdentificatie
     */
    private $zaakIdentificatie = null;

    /**
     * Gets as huidigBetrokkenPersoon
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType
     */
    public function getHuidigBetrokkenPersoon()
    {
        return $this->huidigBetrokkenPersoon;
    }

    /**
     * Sets a new huidigBetrokkenPersoon
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $huidigBetrokkenPersoon
     * @return self
     */
    public function setHuidigBetrokkenPersoon(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $huidigBetrokkenPersoon = null)
    {
        $this->huidigBetrokkenPersoon = $huidigBetrokkenPersoon;
        return $this;
    }

    /**
     * Gets as nieuwBetrokkenPersoon
     *
     * @return \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType
     */
    public function getNieuwBetrokkenPersoon()
    {
        return $this->nieuwBetrokkenPersoon;
    }

    /**
     * Sets a new nieuwBetrokkenPersoon
     *
     * @param \ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $nieuwBetrokkenPersoon
     * @return self
     */
    public function setNieuwBetrokkenPersoon(\ToezichtS2S\MijnRechtspraak\Model\Personen\v1\PersoonType $nieuwBetrokkenPersoon = null)
    {
        $this->nieuwBetrokkenPersoon = $nieuwBetrokkenPersoon;
        return $this;
    }

    /**
     * Gets as rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Sets a new rol
     *
     * @param string $rol
     * @return self
     */
    public function setRol(string $rol = null)
    {
        $this->rol = $rol;
        return $this;
    }

    /**
     * Gets as zaakIdentificatie
     *
     * @return string
     */
    public function getZaakIdentificatie()
    {
        return $this->zaakIdentificatie;
    }

    /**
     * Sets a new zaakIdentificatie
     *
     * @param string $zaakIdentificatie
     * @return self
     */
    public function setZaakIdentificatie(string $zaakIdentificatie = null)
    {
        $this->zaakIdentificatie = $zaakIdentificatie;
        return $this;
    }


}

