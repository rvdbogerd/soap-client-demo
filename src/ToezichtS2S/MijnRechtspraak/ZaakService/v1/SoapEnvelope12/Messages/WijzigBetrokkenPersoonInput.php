<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapEnvelope12\Messages;

/**
 * Class representing WijzigBetrokkenPersoonInput
 */
class WijzigBetrokkenPersoonInput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\WijzigBetrokkenPersoonInput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\WijzigBetrokkenPersoonInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\WijzigBetrokkenPersoonInput $body
     * @return self
     */
    public function setBody(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\WijzigBetrokkenPersoonInput $body = null)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header = null)
    {
        $this->header = $header;
        return $this;
    }


}

