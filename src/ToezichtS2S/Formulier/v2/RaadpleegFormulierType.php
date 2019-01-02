<?php

namespace ToezichtS2S\Formulier\v2;

/**
 * Class representing RaadpleegFormulierType
 *
 *
 * XSD Type: RaadpleegFormulier
 */
class RaadpleegFormulierType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierType $data
     */
    private $data = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\FormulierSjabloonDetailType $sjabloon
     */
    private $sjabloon = null;

    /**
     * @property string[] $toegestaneVerwerking
     */
    private $toegestaneVerwerking = null;

    /**
     * Gets as data
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierType $data
     * @return self
     */
    public function setData(\ToezichtS2S\Formulier\v2\FormulierType $data = null)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as sjabloon
     *
     * @return \ToezichtS2S\Formulier\v2\FormulierSjabloonDetailType
     */
    public function getSjabloon()
    {
        return $this->sjabloon;
    }

    /**
     * Sets a new sjabloon
     *
     * @param \ToezichtS2S\Formulier\v2\FormulierSjabloonDetailType $sjabloon
     * @return self
     */
    public function setSjabloon(\ToezichtS2S\Formulier\v2\FormulierSjabloonDetailType $sjabloon = null)
    {
        $this->sjabloon = $sjabloon;
        return $this;
    }

    /**
     * Adds as soortVerwerking
     *
     * @return self
     * @param string $soortVerwerking
     */
    public function addToToegestaneVerwerking($soortVerwerking)
    {
        $this->toegestaneVerwerking[] = $soortVerwerking;
        return $this;
    }

    /**
     * isset toegestaneVerwerking
     *
     * @param int|string $index
     * @return bool
     */
    public function issetToegestaneVerwerking($index)
    {
        return isset($this->toegestaneVerwerking[$index]);
    }

    /**
     * unset toegestaneVerwerking
     *
     * @param int|string $index
     * @return void
     */
    public function unsetToegestaneVerwerking($index)
    {
        unset($this->toegestaneVerwerking[$index]);
    }

    /**
     * Gets as toegestaneVerwerking
     *
     * @return string[]
     */
    public function getToegestaneVerwerking()
    {
        return $this->toegestaneVerwerking;
    }

    /**
     * Sets a new toegestaneVerwerking
     *
     * @param string $toegestaneVerwerking
     * @return self
     */
    public function setToegestaneVerwerking(array $toegestaneVerwerking = null)
    {
        $this->toegestaneVerwerking = $toegestaneVerwerking;
        return $this;
    }


}

