<?php

namespace ToezichtS2S\Notificaties\v1;

use ToezichtS2S\Service\Algemeen\v1\StandaardZoekAntwoordType;

/**
 * Class representing ZoekAntwoordType
 *
 *
 * XSD Type: ZoekAntwoord
 */
class ZoekAntwoordType extends StandaardZoekAntwoordType
{

    /**
     * @property \ToezichtS2S\Notificaties\v1\NotificatieType[] $notificaties
     */
    private $notificaties = null;

    /**
     * Adds as notificatie
     *
     * @return self
     * @param \ToezichtS2S\Notificaties\v1\NotificatieType $notificatie
     */
    public function addToNotificaties(\ToezichtS2S\Notificaties\v1\NotificatieType $notificatie)
    {
        $this->notificaties[] = $notificatie;
        return $this;
    }

    /**
     * isset notificaties
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificaties($index)
    {
        return isset($this->notificaties[$index]);
    }

    /**
     * unset notificaties
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificaties($index)
    {
        unset($this->notificaties[$index]);
    }

    /**
     * Gets as notificaties
     *
     * @return \ToezichtS2S\Notificaties\v1\NotificatieType[]
     */
    public function getNotificaties()
    {
        return $this->notificaties;
    }

    /**
     * Sets a new notificaties
     *
     * @param \ToezichtS2S\Notificaties\v1\NotificatieType[] $notificaties
     * @return self
     */
    public function setNotificaties(array $notificaties = null)
    {
        $this->notificaties = $notificaties;
        return $this;
    }


}

