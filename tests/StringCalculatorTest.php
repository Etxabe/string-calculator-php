<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     **/
    public function givenEmptyReturnsZero(): void
    {
        $response = $this->stringCalculator->Add('');

        $this->assertEquals(0, $response);
    }

    /**
     * @test
     **/
    public function givenSingleNumberReturnsSameNumber(): void
    {
        $response = $this->stringCalculator->Add('1');

        $this->assertEquals(1, $response);
    }

    /**
     * @test
     **/
    public function givenNumbersSeparatedByCommasReturnsSum(): void
    {
        $response = $this->stringCalculator->Add('1,2');

        $this->assertEquals(3, $response);
    }

    /**
     * @test
     **/
    public function givenNumbersSeparatedByCommasAndLineBreakReturnsSum(): void
    {
        $response = $this->stringCalculator->Add("1\n2,3");

        $this->assertEquals(6, $response);
    }

}