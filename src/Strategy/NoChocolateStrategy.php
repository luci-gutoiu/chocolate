<?php

namespace Chocolate\Strategy;

class NoChocolateStrategy extends AbstractStrategy
{
    public const NO_CHOCOLATE_FIRST_LINE_FORMAT = 'No more chocolate bar in the box, no more chocolate bar.';
    public const NO_CHOCOLATE_SECOND_LINE_FORMAT = 'Go to the store and buy another box, {initialChocolateNumber} chocolate bars in the box.';

    /**
     * @inheritDoc
     */
    public function formatFirstLine(): string
    {
        return self::NO_CHOCOLATE_FIRST_LINE_FORMAT;
    }

    /**
     * @inheritDoc
     */
    public function formatSecondLine(): string
    {
        return str_replace('{initialChocolateNumber}', $this->chocolateNumber, self::NO_CHOCOLATE_SECOND_LINE_FORMAT);
    }
}