<?php
declare(strict_types=1);
namespace App\Tests\Util;


use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $calculator;
    protected function setUp(){
        $this->calculator = new Calculator();
    }

    protected function tearDown(){
        $this->calculator = NULL;
    }

    /**
     * @dataProvider providerAdd
     * @param $a
     * @param $b
     * @param $c
     */
    public function testAdd($a, $b, $c)
    {
        $result = $this->calculator->add($a, $b);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals($c, $result);
    }

    public function  providerAdd(){
        return array(
            array(5, 4, 9),
            array(10, 50, 60),
            array(3, 2, 5),
            array(8, 8, 16)
        );
    }
}