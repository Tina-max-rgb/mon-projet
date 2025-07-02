<?php

use PHPUnit\Framework\TestCase;
use App\Greeter; // Assurez-vous que ce namespace est correct

class GreeterTest extends TestCase
{
    public function testGreet()
    {
        $greeter = new Greeter();
        $this->assertSame('Hello, World!', $greeter->greet());
    }
}
