<?php

namespace ToezichtS2S\Algemeen\v2;

/**
 * Class representing BijlageType
 *
 *
 * XSD Type: Bijlage
 */
class BijlageType
{

    /**
     * @property string $contentType
     */
    private $contentType = null;

    /**
     * @property mixed $inhoud
     */
    private $inhoud = null;

    /**
     * Gets as contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType(string $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as inhoud
     *
     * @return mixed
     */
    public function getInhoud()
    {
        return $this->inhoud;
    }

    /**
     * Sets a new inhoud
     *
     * @param mixed $inhoud
     * @return self
     */
    public function setInhoud(\mixed $inhoud = null)
    {
        $this->inhoud = $inhoud;
        return $this;
    }


}

