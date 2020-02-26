<?php

namespace Chocolate\Validator;

interface ValidatorInterface
{
    /**
     * @param $input
     */
    public function validate($input): void;

    /**
     * @return bool
     */
    public function isValid(): bool;
}