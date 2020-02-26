<?php

namespace Chocolate\Start;

use Chocolate\Factory\ChocolateFormatterFactory;
use Chocolate\Validator\ValidatorInterface;
use Chocolate\Writer\WriterInterface;

class ChocolateBoxStart
{
    public const DEFAULT_CHOCOLATE_NUMBER = 48;

    private int $chocolateNumber;
    private ValidatorInterface $validator;
    private WriterInterface $writer;
    private ChocolateFormatterFactory $factory;

    /**
     * @param $chocolateNumber
     * @param ValidatorInterface $validator
     * @param WriterInterface $writer
     * @param ChocolateFormatterFactory $factory
     */
    public function __construct(
        $chocolateNumber,
        ValidatorInterface $validator,
        WriterInterface $writer,
        ChocolateFormatterFactory $factory
    ) {
        $this->chocolateNumber = $chocolateNumber;
        $this->validator = $validator;
        $this->writer = $writer;
        $this->factory = $factory;
    }

    public function run(): void
    {
        $this->validator->validate($this->chocolateNumber);
        if (!$this->validator->isValid()) {
            $this->chocolateNumber = self::DEFAULT_CHOCOLATE_NUMBER;
        }
        $this->factory->setDefaultChocolateNumber($this->chocolateNumber);
        for ($number = $this->chocolateNumber; $number >= 0; $number--) {
            $this->factory->setChocolateNumber($number);
            $firstLine = $this->factory->getStrategy()->formatFirstLine();
            $secondLine = $this->factory->getStrategy()->formatSecondLine();
            $this->writer->write($firstLine)->write("\r\n");
            $this->writer->write($secondLine)->write("\r\n")->write("\r\n");
        }
    }
}