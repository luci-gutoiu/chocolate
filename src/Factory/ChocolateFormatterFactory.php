<?php

namespace Chocolate\Factory;

use Chocolate\Strategy\DefaultStrategy;
use Chocolate\Strategy\NoChocolateStrategy;
use Chocolate\Strategy\OneChocolateStrategy;
use Chocolate\Strategy\StrategyInterface;

class ChocolateFormatterFactory
{
    private int $defaultChocolateNumber;
    private int $chocolateNumber;

    /**
     * @param mixed $defaultChocolateNumber
     * @return ChocolateFormatterFactory
     */
    public function setDefaultChocolateNumber(int $defaultChocolateNumber): self
    {
        $this->defaultChocolateNumber = $defaultChocolateNumber;

        return $this;
    }

    /**
     * @param mixed $chocolateNumber
     * @return ChocolateFormatterFactory
     */
    public function setChocolateNumber(int $chocolateNumber): self
    {
        $this->chocolateNumber = $chocolateNumber;

        return $this;
    }

    /**
     * @return StrategyInterface
     */
    public function getStrategy(): StrategyInterface
    {
        if ($this->chocolateNumber > 1) {
            return new DefaultStrategy($this->chocolateNumber);
        } elseif ($this->chocolateNumber == 1) {
            return new OneChocolateStrategy($this->chocolateNumber);
        } else {
            return new NoChocolateStrategy($this->defaultChocolateNumber);
        }
    }
}