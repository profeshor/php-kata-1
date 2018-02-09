<?php

class RomanNumbers
{
    public function convert($decimal_digit)
    {
      if ($decimal_digit >=1 && $decimal_digit <= 3){
          $roman_digit = '';
          for ($i=1; $i<=$decimal_digit; $i++){
            $roman_digit = $roman_digit.'I';
          }
      }

      if ($decimal_digit == 4){
        return 'IV';
      }

      if ($decimal_digit >=5 && $decimal_digit <= 8){
          $roman_digit = 'V';
          for ($i=6; $i<=$decimal_digit; $i++){
            $roman_digit = $roman_digit.'I';
          }
      }

      return $roman_digit;
    }
}
