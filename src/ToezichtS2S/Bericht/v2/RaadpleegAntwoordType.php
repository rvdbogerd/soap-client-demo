<?php

namespace ToezichtS2S\Bericht\v2;

use ToezichtS2S\Algemeen\v2\AntwoordType;

/**
 * Class representing RaadpleegAntwoordType
 *
 *
 * XSD Type: RaadpleegAntwoord
 */
class RaadpleegAntwoordType extends AntwoordType
{

    /**
     * @property \ToezichtS2S\Bericht\v2\BerichtReferentieType[] $berichten
     */
    private $berichten = null;

    /**
     * Adds as berichtReferentie
     *
     * @return self
     * @param \ToezichtS2S\Bericht\v2\BerichtReferentieType $berichtReferentie
     */
    public function addToBerichten(\ToezichtS2S\Bericht\v2\BerichtReferentieType $berichtReferentie)
    {
        $this->berichten[] = $berichtReferentie;
        return $this;
    }

    /**
     * isset berichten
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBerichten($index)
    {
        return isset($this->berichten[$index]);
    }

    /**
     * unset berichten
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBerichten($index)
    {
        unset($this->berichten[$index]);
    }

    /**
     * Gets as berichten
     *
     * @return \ToezichtS2S\Bericht\v2\BerichtReferentieType[]
     */
    public function getBerichten()
    {
        return $this->berichten;
    }

    /**
     * Sets a new berichten
     *
     * @param \ToezichtS2S\Bericht\v2\BerichtReferentieType[] $berichten
     * @return self
     */
    public function setBerichten(array $berichten = null)
    {
        $this->berichten = $berichten;
        return $this;
    }


}

