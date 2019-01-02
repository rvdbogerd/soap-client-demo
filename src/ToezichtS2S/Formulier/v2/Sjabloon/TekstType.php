<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing TekstType
 *
 *
 * XSD Type: Tekst
 */
class TekstType extends GegevenType
{

    /**
     * @property bool $indicatieMeerregelig
     */
    private $indicatieMeerregelig = null;

    /**
     * @property int $maximaleLengte
     */
    private $maximaleLengte = null;

    /**
     * Gets as indicatieMeerregelig
     *
     * @return bool
     */
    public function getIndicatieMeerregelig()
    {
        return $this->indicatieMeerregelig;
    }

    /**
     * Sets a new indicatieMeerregelig
     *
     * @param bool $indicatieMeerregelig
     * @return self
     */
    public function setIndicatieMeerregelig(bool $indicatieMeerregelig = null)
    {
        $this->indicatieMeerregelig = $indicatieMeerregelig;
        return $this;
    }

    /**
     * Gets as maximaleLengte
     *
     * @return int
     */
    public function getMaximaleLengte()
    {
        return $this->maximaleLengte;
    }

    /**
     * Sets a new maximaleLengte
     *
     * @param int $maximaleLengte
     * @return self
     */
    public function setMaximaleLengte(int $maximaleLengte = null)
    {
        $this->maximaleLengte = $maximaleLengte;
        return $this;
    }


}

