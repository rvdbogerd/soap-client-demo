<?php

namespace ToezichtS2S\Service\Notificaties\v1;

/**
 * Class representing NotificatiesType
 *
 *
 * XSD Type: Notificaties
 */
class NotificatiesType
{

    /**
     * @property \ToezichtS2S\Service\Notificaties\v1\NotificatieType[] $notificatie
     */
    private $notificatie = [
        
    ];

    /**
     * Adds as notificatie
     *
     * @return self
     * @param \ToezichtS2S\Service\Notificaties\v1\NotificatieType $notificatie
     */
    public function addToNotificatie(\ToezichtS2S\Service\Notificaties\v1\NotificatieType $notificatie)
    {
        $this->notificatie[] = $notificatie;
        return $this;
    }

    /**
     * isset notificatie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificatie($index)
    {
        return isset($this->notificatie[$index]);
    }

    /**
     * unset notificatie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificatie($index)
    {
        unset($this->notificatie[$index]);
    }

    /**
     * Gets as notificatie
     *
     * @return \ToezichtS2S\Service\Notificaties\v1\NotificatieType[]
     */
    public function getNotificatie()
    {
        return $this->notificatie;
    }

    /**
     * Sets a new notificatie
     *
     * @param \ToezichtS2S\Service\Notificaties\v1\NotificatieType[] $notificatie
     * @return self
     */
    public function setNotificatie(array $notificatie = null)
    {
        $this->notificatie = $notificatie;
        return $this;
    }


}

