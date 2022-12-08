<?php

namespace Src\Example;

use Exception;

class Validation
{
    public static function minLength(?string $value = '', int $length = 3)
    {
        if (!$value || strlen($value) < $length) {
            throw new Exception('invalid qty characters');
        }
    }

    public static function maxLength(?string $value = '', int $length = 255)
    {
        if (!$value || strlen($value) > $length) {
            throw new CustomException('invalid qty characters');
        }
    }
}
