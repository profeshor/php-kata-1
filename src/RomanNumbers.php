<?php

class RomanNumbers
{
    public function convert($decimal_number)
    {

      $decimal_number_string = ''.$decimal_number;

      $decimal_number_array = str_split($decimal_number_string);

      $decimal_number_length = count($decimal_number_array);

      $roman_number = '';

      if ($decimal_number_length == 1){
        if ( intval($decimal_number_array[$decimal_number_length-1]) >=1 && intval($decimal_number_array[$decimal_number_length-1]) <= 3){

            for ($i=1; $i<=intval($decimal_number_array[$decimal_number_length-1]); $i++){
              $roman_number = $roman_number.'I';
            }
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) == 4 ){
          $roman_number = $roman_number.'IV';
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) >= 5 && intval($decimal_number_array[$decimal_number_length-1]) <= 8){
            $roman_number = 'V';
            for ($i=6; $i<=intval($decimal_number_array[$decimal_number_length-1]); $i++){
              $roman_number = $roman_number.'I';
            }
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) == 9 ){
          $roman_number = $roman_number.'IX';
        }
      }

      if ($decimal_number_length == 2){

        if ( intval($decimal_number_array[$decimal_number_length-2]) >= 1 && intval($decimal_number_array[$decimal_number_length-2]) <= 3){
            for ($i=1; $i<=intval($decimal_number_array[$decimal_number_length-2]); $i++){
              $roman_number = 'X'.$roman_number;
            }
        }

        if ( intval($decimal_number_array[$decimal_number_length-2]) == 4 ){
          $roman_number = 'XL'.$roman_number;
        }

        if ( intval($decimal_number_array[$decimal_number_length-2]) >= 5 && intval($decimal_number_array[$decimal_number_length-2]) <= 8){
            $second_roman_number='L';
            for ($i=6; $i<=intval($decimal_number_array[$decimal_number_length-2]); $i++){
              $second_roman_number = $second_roman_number.'X';
            }
            $roman_number = $second_roman_number.$roman_number;
        }

        if (intval($decimal_number_array[$decimal_number_length-2]) == 9 ){
          $roman_number = 'XC'.$roman_number;
        }



        if ( intval($decimal_number_array[$decimal_number_length-1]) >=1 && intval($decimal_number_array[$decimal_number_length-1]) <= 3){

            for ($i=1; $i<=intval($decimal_number_array[$decimal_number_length-1]); $i++){
              $roman_number = $roman_number.'I';
            }
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) == 4 ){
          $roman_number = $roman_number.'IV';
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) >= 5 && intval($decimal_number_array[$decimal_number_length-1]) <= 8){
            $roman_number = 'V';
            for ($i=6; $i<=intval($decimal_number_array[$decimal_number_length-1]); $i++){
              $roman_number = $roman_number.'I';
            }
        }

        if (intval($decimal_number_array[$decimal_number_length-1]) == 9 ){
          $roman_number = $roman_number.'IX';
        }
      }

      return $roman_number;
    }
}
