<?php

namespace Pierrick\Fizzbuzz\Tests;

use Pierrick\Fizzbuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzBuzz->execute(15));
        $this->assertEquals('FizzBuzz', $fizzBuzz->execute(30));
        $this->assertEquals('Buzz', $fizzBuzz->execute(100));
        $this->assertEquals('Fizz', $fizzBuzz->execute(3));
        $this->assertEquals('Buzz', $fizzBuzz->execute(5));
        $this->assertEquals(1, $fizzBuzz->execute(1));
        $this->assertEquals(2, $fizzBuzz->execute(2));
        $this->assertEquals(22, $fizzBuzz->execute(22));
    }
}
