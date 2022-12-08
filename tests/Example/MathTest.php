<?php

use Src\Example\Math;

it('test sum', function () {
    $math = new Math;
    $result = $math->sum(4, 2);
    expect($result)->toBe(6);
    expect($result)->toBeInt();

    $result = $math->sum(9000, 2);
    expect($result)->toBe(9002);
});
