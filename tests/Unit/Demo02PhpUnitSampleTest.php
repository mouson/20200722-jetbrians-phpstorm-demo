<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class Demo02PhpUnitSampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * Demo 01 透過 PhpStorm 快速建立物件
     * Step 1 建立物件
     *     * 建立物件
     *     * use Calculator
     * Step 2 建立加法 method
     *     * 複製 TestMethod
     *     * 實作 add method
     * Step 3 複製 TestMethod 實作加法演算法
     *     * 透過 ideavim 快速複製 method
     *
     * @return void
     */
    public function testShouldUsedCalculator()
    {
        /** Arrange */
        $target = new Calculator();
        /** Assume */

        /** Act */

        /** Assert */
        $this->assertInstanceOf(Calculator::class, $target);
    }


    /**
     * Demo 01 透過 PhpStorm 快速建立物件
     * Step 1 建立物件
     *     * 建立物件
     *     * use Calculator
     * Step 2 建立加法 method
     *     * 複製 TestMethod
     *     * 實作 add method
     * Step 3 複製 TestMethod 實作加法演算法
     *     * 透過 ideavim 快速複製 method
     *
     * @return void
     */
    public function testCalculatorShouldUsedAddMethod()
    {
        /** Arrange */
        $target = new Calculator();
        /** Assume */

        /** Act */
        $actual = $target->add(0, 0);

        /** Assert */
        $this->assertEquals(0, $actual);
    }

}
