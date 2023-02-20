<?php
    function sortArrayByLength($arr) {
        usort($arr, function($a, $b) {
          return strlen($a) - strlen($b);
        });
        return $arr;
      }
      
      $strings = array("Jamal", "Kamal", "Salam", "Rahim", "Karim");
      $sortedStrings = sortArrayByLength($strings);
      
      print_r($sortedStrings);