<?php

namespace spec;

use RomanNumbers;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumbers::class);
    }

    function it_convert_number_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_convert_number_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_convert_number_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_convert_number_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    function it_convert_number_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_convert_number_7()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    function it_convert_number_8()
    {
        $this->convert(8)->shouldReturn('VIII');
    }

    function it_convert_number_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }

    function it_convert_number_16()
    {
        $this->convert(11)->shouldReturn('XVI');
    }

    function it_convert_number_21()
    {
        $this->convert(11)->shouldReturn('XXI');
    }

    function it_convert_number_44()
    {
        $this->convert(11)->shouldReturn('XLIV');
    }
}
