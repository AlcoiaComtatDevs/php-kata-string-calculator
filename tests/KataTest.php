<?php


namespace Kata\Test;


use Kata\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function nothing()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function itShouldBeZeroForEmptyString()
    {
        $kata = new Kata();

        $result = $kata->add('');

        $this->assertEquals(0, $result);
    }

    /** @test */
    public function itShouldBeSameForOnlyOneParameter()
    {
        $kata = new Kata();

        $result = $kata->add('1');

        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function itShouldBeThreeForOneAndTwoParameters()
    {
        $kata = new Kata();

        $result = $kata->add('1,2');

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function itShouldBeSendSeveralNumbersAndSum()
    {
        $kata = new Kata();

        $result = $kata->add('1,2,3');

        $this->assertEquals(6, $result);
    }


    /**
     * @test
     */
    public function itShouldAcceptNewDelimiter()
    {
        $kata = new Kata();

        $result = $kata->add("1\n2,3");

        $this->assertEquals(6, $result);
    }

}
