<?php
require_once __DIR__ . '/../src/Program2.php';

class Simple2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $simple2 = new Program2();
        $simple2->NameSet('Juswa');
        $this->assertEquals($simple2->NameGet(), 'Juswa');
    }

    public function testGetAge()
    {
        $simple2 = new Program2();
        $simple2->AgeSet(21);
        $this->assertEquals($simple2->AgeGet(), 21);
    }

    public function testFaveColor()
    {
        $simple2 = new Program2();
        $simple2->ColorSet('Blue');
        $this->assertEquals($simple2->ColorGet(), 'Blue');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Program2();
        $simple2 ->NameSet('Juswa');
        $this->assertIsString($simple2->NameGet(), 'Juswa');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Program2();
        $simple2->AgeSet(21);
        $this->assertIsInt($simple2->AgeGet(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Program2();
        $simple2->AgeSet(21);
        $this->assertIsNumeric($simple2->AgeGet(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Program2();
        $simple2->ColorSet('Blue');
        $this->assertIsString($simple2->ColorGet(), 'Blue');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Program2();
        $simple2->TogetherSet('Juswa', 21, 'Blue');
        $this->assertEquals($simple2->TogetherGet(), 'Juswa', 21, 'Blue');
    }

}