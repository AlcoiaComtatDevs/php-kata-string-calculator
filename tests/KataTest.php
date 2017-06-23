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
}
