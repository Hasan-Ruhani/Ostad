<?php
   function say($string){
      $needle = ' ';
      $isWPresent = strpos($string, $needle);

      if($needle == ' '){     //check whitespace
      $needle = "' '";
      }

      if($isWPresent !== false){     //check letters
      echo "{$needle} is present";
      }
      else{
      echo "{$needle} is not present";
      }
   }
   say("Hi I'm Hasan");
   


      
      
    