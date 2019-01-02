<?php

namespace ToezichtS2S\Notificaties\v1;

/**
 * Class representing NotificatieWijzigingsInformatieType
 *
 *
 * XSD Type: Notificatie.WijzigingsInformatie
 */
class NotificatieWijzigingsInformatieType
{

    /**
     * @property \ToezichtS2S\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Adds as parameter
     *
     * @return self
     * @param \ToezichtS2S\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType $parameter
     */
    public function addToParameter(\ToezichtS2S\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * @return \ToezichtS2S\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \ToezichtS2S\Notificaties\v1\NotificatieWijzigingsInformatieType\ParameterAType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

