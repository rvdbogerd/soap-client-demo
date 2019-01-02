<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing WaardeOperandType
 *
 *
 * XSD Type: WaardeOperand
 */
class WaardeOperandType extends OperandType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Data\EnkelvoudigeWaardeType $waarde
     */
    private $waarde = null;

    /**
     * Gets as waarde
     *
     * @return \ToezichtS2S\Formulier\v2\Data\EnkelvoudigeWaardeType
     */
    public function getWaarde()
    {
        return $this->waarde;
    }

    /**
     * Sets a new waarde
     *
     * @param \ToezichtS2S\Formulier\v2\Data\EnkelvoudigeWaardeType $waarde
     * @return self
     */
    public function setWaarde(\ToezichtS2S\Formulier\v2\Data\EnkelvoudigeWaardeType $waarde = null)
    {
        $this->waarde = $waarde;
        return $this;
    }


}

