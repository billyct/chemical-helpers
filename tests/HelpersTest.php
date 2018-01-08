<?php

namespace XiXi\Tests;

use XiXi\Helpers\DateTime;
use XiXi\Helpers\Chemical\Substance;

class HelpersTest extends TestCase
{
    public function test_function_reg_cas()
    {
        $this->assertEquals(Substance::$REG_CAS, reg_cas());
    }

    public function test_function_reg_ec()
    {
        $this->assertEquals(Substance::$REG_EC, reg_ec());
    }

    public function test_function_is_cas()
    {
        $cas = '50-00-0';
        $this->assertTrue(is_cas($cas));

        $cas = 'x';
        $this->assertFalse(is_cas($cas));
        $this->assertFalse(is_cas(''));
    }

    public function test_function_is_ec()
    {
        $ec = '252-643-3';
        $this->assertTrue(is_ec($ec));

        $ec = 'y';
        $this->assertFalse(is_ec($ec));
        $this->assertFalse(is_ec(''));
    }

    public function test_function_month_abbreviation_en()
    {
        $date = date("M", strtotime("2018-01-07"));
        $date = DateTime::monthAbbreviationEN($date);
        $this->assertEquals('Jan.', $date);

        $date = DateTime::monthAbbreviationEN('test');
        $this->assertEquals('test', $date);
    }
}
