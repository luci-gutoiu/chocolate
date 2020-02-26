<?php

namespace Chocolate\Validator;

class ChocolateNumberValidator implements ValidatorInterface
{
    /**
     * @var array
     */
    private array $errors = [];

    /**
     * @inheritDoc
     */
    public function validate($input): void
    {
        if (!filter_var($input, FILTER_VALIDATE_INT, ['min_range' => 1])) {
            $this->addError("Input is not int");
        }
    }

    /**
     * @param string $error
     * @return $this
     */
    private function addError(string $error): self
    {
        $this->errors[] = $error;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isValid(): bool
    {
        return !count($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}