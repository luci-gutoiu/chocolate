<?php

namespace Chocolate\Strategy;

interface SecondLineStrategyInterface extends StrategyInterface
{
    /**
     * @return string
     */
    public function formatSecondLine(): string;
}