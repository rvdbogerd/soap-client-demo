<?php

namespace ToezichtS2S\Formulier\v2\SoapParts;

/**
 * Class representing TrekInInput
 */
class TrekInInput
{

    /**
     * @property \ToezichtS2S\Formulier\v2\TrekIn $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \ToezichtS2S\Formulier\v2\TrekIn
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \ToezichtS2S\Formulier\v2\TrekIn $parameters
     * @return self
     */
    public function setParameters(\ToezichtS2S\Formulier\v2\TrekIn $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

