<?php

use Src\Example\Math;

beforeAll(function () {
    echo "beforeAll \n";
});

afterAll(function () {
    echo "afterAll \n";
});

beforeEach(function () {
    echo "beforeEach \n";
    $this->math = new Math;
});
afterEach(function () {
    echo "afterEach \n";
});

it('test sum', function () {
    echo "test sum \n";
    $result = $this->math->sum(4, 2);
    expect($result)->toBe(6);
    expect($result)->toBeInt();

    $result = $this->math->sum(9000, 2);
    expect($result)->toBe(9002);
});

it('should return float', function () {
    echo "should return float \n";
    $result = $this->math->pi();

    expect($result)->toBeFloat();
});

it('should return array or empty', function () {
    echo "should return array or empty \n";
    $result = $this->math->location();

    expect($result)->toBeArray();
    expect($result)->toMatchArray([
        'latitude' => 999991231,
        'longitude' => 413123,
    ]);

    $result2 = $this->math->location('example');
    expect($result2)->toBeString();
    expect($result2)->toBe(strtoupper('example'));
    // expect($result2)->not->toBeEmpty();
});

it('test sum with many results', function (
    int $num1,
    int $num2,
    int $sum
) {
    echo "test sum with many results \n";
    $result = $this->math->sum($num1, $num2);
    expect($result)->toBe($sum);
    expect($result)->toBeInt();
})
->with([
    [4, 6, 10],
    'test 2' => ['num1' => 6, 'num2' => 4, 'sum' => 10],
    'test 3' => [6000, 6000, 12000],
]);
