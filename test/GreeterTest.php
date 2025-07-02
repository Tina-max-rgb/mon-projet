<?php
//add
use PHPUnit\Framework\TestCase;
use Bouno\MonProjet\Greeter; 

class GreeterTest extends TestCase
{
    public function testGreet()
    {
        $greeter = new Greeter();
        $this->assertSame('Hello, World!', $greeter->greet());
    }
}
