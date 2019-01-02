<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing AfbeeldingType
 *
 *
 * XSD Type: Afbeelding
 */
class AfbeeldingType extends GegevenType
{

    /**
     * @property string[] $toegestaneContent
     */
    private $toegestaneContent = null;

    /**
     * Adds as soortMimeType
     *
     * @return self
     * @param string $soortMimeType
     */
    public function addToToegestaneContent($soortMimeType)
    {
        $this->toegestaneContent[] = $soortMimeType;
        return $this;
    }

    /**
     * isset toegestaneContent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetToegestaneContent($index)
    {
        return isset($this->toegestaneContent[$index]);
    }

    /**
     * unset toegestaneContent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetToegestaneContent($index)
    {
        unset($this->toegestaneContent[$index]);
    }

    /**
     * Gets as toegestaneContent
     *
     * @return string[]
     */
    public function getToegestaneContent()
    {
        return $this->toegestaneContent;
    }

    /**
     * Sets a new toegestaneContent
     *
     * @param string $toegestaneContent
     * @return self
     */
    public function setToegestaneContent(array $toegestaneContent = null)
    {
        $this->toegestaneContent = $toegestaneContent;
        return $this;
    }


}

