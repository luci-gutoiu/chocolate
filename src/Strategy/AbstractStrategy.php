<?php

namespace Chocolate\Strategy;

abstract class AbstractStrategy implements FirstLineStrategyInterface, SecondLineStrategyInterface
{
    protected int $chocolateNumber;

    /**
     * AbstractStrategy constructor.
     *
     * @param int $chocolateNumber
     */
    public function __construct(int $chocolateNumber)
    {
        $this->chocolateNumber = $chocolateNumber;
    }
}