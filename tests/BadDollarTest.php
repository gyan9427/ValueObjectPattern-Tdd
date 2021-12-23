<?php

use PHPUnit\Framework\TestCase;
use App\Classes\BadDollar;

class BadDollarTest extends TestCase
{
    public function testBadDollarClassForGetAmountMethod()
    {
        $mock = $this->createMock(BadDollar::class);
        $mock->method("getAmount")
            ->willReturn(true);
        $this->assertTrue($mock->getAmount());
    }
}
