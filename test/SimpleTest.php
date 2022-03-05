<?php
require_once __DIR__ . '/../src/Simple.php';

class SimpleTest extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $simpleClass = new Simple (20);
        $result = $simpleClass->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $simpleClass = new Simple (2);
        $result = $simpleClass->modulus(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $simpleClass = new Simple (2);
        $result = $simpleClass->modulus('A');
    }

    public function testModulus1()
    {
        $simpleClass = new Simple (31);
        $result = $simpleClass->modulus(4);

        $this->assertEquals(3, $result);
    }

    public function testModulus2()
    {
        $simpleClass = new Simple (48);
        $result = $simpleClass->modulus(6);

        $this->assertEquals(0, $result);
    }

}