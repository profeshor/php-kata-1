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

          case 4:
            return 'IV';
            break;

          case 5:
            return 'V';
            break;

          case 6:
            return 'VI';
            break;

          case 7:
            return 'VII';
            break;

          case 8:
            return 'VIII';
            break;

          default:
            # code...
            break;
        }
    }
}
