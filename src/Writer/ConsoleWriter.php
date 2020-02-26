<?php

namespace Chocolate\Writer;

class ConsoleWriter implements WriterInterface
{
    /**
     * @inheritDoc
     */
    public function write(string $output): self
    {
        echo $output;

        return $this;
    }
}