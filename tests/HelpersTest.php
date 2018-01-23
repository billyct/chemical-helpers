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

    public function test_function_is_none()
    {
        $this->assertTrue(is_none('none'));
        $this->assertTrue(is_none(['none']));
        $this->assertTrue(is_none(''));
        $this->assertTrue(is_none([]));
        $this->assertTrue(is_none(['']));
        $this->assertFalse(is_none(['xxx']));
    }

    public function test_function_is_no_data_available()
    {
        $this->assertTrue(is_no_data_available(null));
        $this->assertFalse(is_no_data_available(''));
    }

    public function test_function_is_hazard()
    {
        $this->assertTrue(is_hazard(['xxx']));
        $this->assertFalse(is_hazard(['']));
    }

    public function test_function_range_split()
    {
        $expected = [
            '12',
            '90%',
        ];

        $this->assertEquals($expected, range_split('12-90%'));
        $this->assertEquals($expected, range_split('12 - 90%'));
        $this->assertEquals($expected, range_split('12 ~ 90%'));
        $this->assertEquals($expected, range_split('12 —— 90%'));
        $this->assertEquals(['90'], range_split(90));
    }

    public function test_function_str_to_float()
    {
        $expected = '12.31';

        $this->assertEquals($expected, str_to_float('12.31%'));
        $this->assertEquals(-$expected, str_to_float('-12.31%'));
        $this->assertEquals($expected, str_to_float('%12.31%'));
    }

    public function test_function_is_dangerous_ph()
    {
        $this->assertTrue(is_dangerous_ph(-1));
        $this->assertTrue(is_dangerous_ph(2));
        $this->assertTrue(is_dangerous_ph(11.5));
        $this->assertTrue(is_dangerous_ph(18));
        $this->assertTrue(is_dangerous_ph('7-18'));
        $this->assertFalse(is_dangerous_ph(7));
    }
}
