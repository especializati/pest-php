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

it('should return float', function () {
    $math = new Math;
    $result = $math->pi();

    expect($result)->toBeFloat();
});

it('should return array or empty', function () {
    $math = new Math;
    $result = $math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'latitude' => 999991231,
        'longitude' => 413123,
    ]);

    $result2 = $math->location('example');
    expect($result2)->toBeString();
    expect($result2)->toBe(strtoupper('example'));
    // expect($result2)->not->toBeEmpty();
});
