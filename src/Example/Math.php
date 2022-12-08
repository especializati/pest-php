<?php

namespace Src\Example;

class Math
{
    public function sum(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }

    public function pi(): float
    {
        return 3.1415;
    }

    public function location(string $full = null): array|string
    {
        if ($full) {
            return strtoupper($full);
        }

        return [
            'latitude' => 999991231,
            'longitude' => 413123,
        ];
    }
}
