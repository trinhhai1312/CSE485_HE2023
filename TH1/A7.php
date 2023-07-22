<?php  
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

    $numbers = array_filter($array, function ($number) {
        return $number >= 100 && $number <=200 && $number % 5 ==0;
   });
   print_r($numbers);

?>    