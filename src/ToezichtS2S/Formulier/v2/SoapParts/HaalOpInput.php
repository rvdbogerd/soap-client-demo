<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing HaalOpInput
 */
class HaalOpInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\HaalOp $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\HaalOp
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\HaalOp $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\HaalOp $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

