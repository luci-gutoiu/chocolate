<?php

use Chocolate\Start\ChocolateBoxStart;
use Chocolate\Validator\ChocolateNumberValidator;
use Chocolate\Writer\ConsoleWriter;
use Chocolate\Factory\ChocolateFormatterFactory;

require_once __DIR__.'/../vendor/autoload.php';

$validator = new ChocolateNumberValidator();
$writer = new ConsoleWriter();
$factory = new ChocolateFormatterFactory();

$cb = new ChocolateBoxStart($argv[1], $validator, $writer, $factory);
$cb->run();