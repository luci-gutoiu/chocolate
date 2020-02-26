<?php

namespace Chocolate\Strategy;

class DefaultStrategy extends AbstractStrategy
{
    public const DEFAULT_FIRST_LINE_FORMAT = '{chocolateNumber} pieces of chocolate bars in the box, {chocolateNumber} chocolate bars.';
    public const DEFAULT_SECOND_LINE_FORMAT = 'Take one out of the box, pass it around, {remainingChocolateNumber} chocolate bars in the box.';

    /**
     * @inheritDoc
     */
    public function formatFirstLine(): string
    {
        return str_replace('{chocolateNumber}', $this->chocolateNumber, self::DEFAULT_FIRST_LINE_FORMAT);
    }

    /**
     * @inheritDoc
     */
    public function formatSecondLine(): string
    {
        return str_replace('{remainingChocolateNumber}', $this->chocolateNumber - 1, self::DEFAULT_SECOND_LINE_FORMAT);
    }
}