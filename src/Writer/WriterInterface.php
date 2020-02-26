<?php

namespace Chocolate\Writer;

interface WriterInterface
{
    /**
     * @param string $output
     * @return $this
     */
    public function write(string $output): self;
}