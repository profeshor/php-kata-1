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
}
