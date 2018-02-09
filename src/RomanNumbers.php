<?php

class RomanNumbers
{
    public function convert($decimal_digit)
    {
      $roman_digit = '';

      if ($decimal_digit >=1 || $decimal_digit < 3){
          for ($i=1; $i<=$decimal_digit; $i++){
            $roman_digit = $roman_digit.'I';
          }
      }

      return $roman_digit;
    }
}
