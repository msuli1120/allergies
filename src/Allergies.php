<?php
  class Allergies {

    function allergiesCheck ($number) {
    $allergies_array = array ();
      while((127<$number)&&($number<=255)){
        array_push($allergies_array, "cats");
        $number-=128;
      };
      while(($number>63)&&($number<=127)){
        array_push($allergies_array, "pollen");
        $number-=64;
      };
      while(($number>31)&&($number<=63)){
        array_push($allergies_array, "chocolate");
        $number-=32;
      };
      while(($number>15)&&($number<=31)){
        array_push($allergies_array, "tomatoes");
        $number-=16;
      };
      while(($number>7)&&($number<=15)){
        array_push($allergies_array, "strawberries");
        $number-=8;
      };
      while(($number>3)&&($number<=7)){
        array_push($allergies_array, "shellfish");
        $number-=4;
      };
      while(($number>1)&&($number<=3)){
        array_push($allergies_array, "peanut");
        $number-=2;
      };
      while(($number>0)&&($number<=1)){
        array_push($allergies_array, "eggs");
        $number -= 1;
      }
      return implode(', ', $allergies_array);
    }
  }
?>
