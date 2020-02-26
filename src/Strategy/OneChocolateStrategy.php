<?php

namespace Chocolate\Strategy;

class OneChocolateStrategy extends AbstractStrategy
{
    public const ONE_CHOCOLATE_FIRST_LINE_FORMAT = 'One chocolate bar in the box, one chocolate bar.';
    public const ONE_CHOCOLATE_SECOND_LINE_FORMAT = 'Take one out of the box, pass it around, no more chocolate bar in the box';

    /**
     * @inheritDoc
     */
    public function formatFirstLine(): string
    {
        return self::ONE_CHOCOLATE_FIRST_LINE_FORMAT;
    }

    /**
     * @inheritDoc
     */
    public function formatSecondLine(): string
    {
        return self::ONE_CHOCOLATE_SECOND_LINE_FORMAT;
    }
}