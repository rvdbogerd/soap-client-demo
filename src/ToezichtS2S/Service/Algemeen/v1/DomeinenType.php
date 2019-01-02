<?php

namespace ToezichtS2S\Service\Algemeen\v1;

/**
 * Class representing DomeinenType
 *
 *
 * XSD Type: Domeinen
 */
class DomeinenType
{

    /**
     * @property string[] $domein
     */
    private $domein = [
        
    ];

    /**
     * Adds as domein
     *
     * @return self
     * @param string $domein
     */
    public function addToDomein($domein)
    {
        $this->domein[] = $domein;
        return $this;
    }

    /**
     * isset domein
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomein($index)
    {
        return isset($this->domein[$index]);
    }

    /**
     * unset domein
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomein($index)
    {
        unset($this->domein[$index]);
    }

    /**
     * Gets as domein
     *
     * @return string[]
     */
    public function getDomein()
    {
        return $this->domein;
    }

    /**
     * Sets a new domein
     *
     * @param string $domein
     * @return self
     */
    public function setDomein(array $domein = null)
    {
        $this->domein = $domein;
        return $this;
    }


}

