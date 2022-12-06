<?php

namespace Tests\Example;

use PHPUnit\Framework\TestCase;
use Src\Example\Example;

class ExampleTest extends TestCase
{
    public function testSayHi()
    {
        $example = new Example;
        $response = $example->say();
        $this->assertEquals('hi', $response);
        $this->assertIsString($response);
    }
}
