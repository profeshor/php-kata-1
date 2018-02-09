<?php

class RomanNumbers
{
    public function convert($decimal_digit)
    {
        switch ($decimal_digit) {
          case 1:
            return 'I';
            break;

          case 2:
            return 'II';
            break;

          case 3:
            return 'III';
            break;

          default:
            # code...
            break;
        }
    }
}
