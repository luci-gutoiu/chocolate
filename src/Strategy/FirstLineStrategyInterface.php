<?php

namespace Chocolate\Strategy;

interface FirstLineStrategyInterface extends StrategyInterface
{
    /**
     * @return string
     */
    public function formatFirstLine(): string;
}