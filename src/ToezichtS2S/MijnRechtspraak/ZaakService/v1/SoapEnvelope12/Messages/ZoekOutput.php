<?php

namespace ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapEnvelope12\Messages;

/**
 * Class representing ZoekOutput
 */
class ZoekOutput
{

    /**
     * @property \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\ZoekOutput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\ZoekOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\ZoekOutput $body
     * @return self
     */
    public function setBody(\ToezichtS2S\MijnRechtspraak\ZaakService\v1\SoapParts\ZoekOutput $body = null)
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

