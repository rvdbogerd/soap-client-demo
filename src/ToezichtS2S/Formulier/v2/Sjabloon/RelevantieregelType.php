<?php

namespace ToezichtS2S\Formulier\v2\Sjabloon;

/**
 * Class representing RelevantieregelType
 *
 *
 * XSD Type: Relevantieregel
 */
class RelevantieregelType
{

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\OperandType $linkerOperand
     */
    private $linkerOperand = null;

    /**
     * @property string $operator
     */
    private $operator = null;

    /**
     * @property \ToezichtS2S\Formulier\v2\Sjabloon\OperandType $rechterOperand
     */
    private $rechterOperand = null;

    /**
     * @property string $relevantGegevenIdentificatie
     */
    private $relevantGegevenIdentificatie = null;

    /**
     * Gets as linkerOperand
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\OperandType
     */
    public function getLinkerOperand()
    {
        return $this->linkerOperand;
    }

    /**
     * Sets a new linkerOperand
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\OperandType $linkerOperand
     * @return self
     */
    public function setLinkerOperand(\ToezichtS2S\Formulier\v2\Sjabloon\OperandType $linkerOperand = null)
    {
        $this->linkerOperand = $linkerOperand;
        return $this;
    }

    /**
     * Gets as operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * @param string $operator
     * @return self
     */
    public function setOperator(string $operator = null)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as rechterOperand
     *
     * @return \ToezichtS2S\Formulier\v2\Sjabloon\OperandType
     */
    public function getRechterOperand()
    {
        return $this->rechterOperand;
    }

    /**
     * Sets a new rechterOperand
     *
     * @param \ToezichtS2S\Formulier\v2\Sjabloon\OperandType $rechterOperand
     * @return self
     */
    public function setRechterOperand(\ToezichtS2S\Formulier\v2\Sjabloon\OperandType $rechterOperand = null)
    {
        $this->rechterOperand = $rechterOperand;
        return $this;
    }

    /**
     * Gets as relevantGegevenIdentificatie
     *
     * @return string
     */
    public function getRelevantGegevenIdentificatie()
    {
        return $this->relevantGegevenIdentificatie;
    }

    /**
     * Sets a new relevantGegevenIdentificatie
     *
     * @param string $relevantGegevenIdentificatie
     * @return self
     */
    public function setRelevantGegevenIdentificatie(string $relevantGegevenIdentificatie = null)
    {
        $this->relevantGegevenIdentificatie = $relevantGegevenIdentificatie;
        return $this;
    }


}

