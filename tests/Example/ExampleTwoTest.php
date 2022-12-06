<?php

use Src\Example\Example;

it('should returns string', function () {
    $example = new Example;
    $response = $example->say();

    expect($response)->toBeString();
    $this->assertNotEmpty($response);
});
