<?php

use PHPUnit\Framework\TestCase;
use App\Classes\BadDollar;

class BadDollarTest extends TestCase
{
    private $mock;
    private $class;

    protected function setUp(): void
    {
        $this->mock = $this->createMock(BadDollar::class);
        $this->class = BadDollar::class;
    }
    public function testBadDollarClassForGetAmountMethod()
    {

        $this->mock->method("getAmount")
            ->willReturn(true);
        $this->assertTrue($this->mock->getAmount());
    }

    public function testBadDollarMustHaveAmountAttribute()
    {
        $this->assertClassHasAttribute('amount',$this->class);
    }
}
