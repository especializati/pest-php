<?php

use Src\Example\CustomException;
use Src\Example\Validation;

it('validate min length', function () {
    Validation::minLength('ca');
})
->throws(Exception::class, 'invalid qty characters');

it('validate is empty', function () {
    Validation::minLength();
})
->throws(Exception::class);

it('validate is null', function () {
    Validation::minLength(null);
})
->throws(Exception::class);

it('validate custom exception', function () {
    Validation::maxLength();
})
->throws(CustomException::class);
