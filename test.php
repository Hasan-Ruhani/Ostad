<?php
    function isEven_or_Odd($number) {  
        if($number % 2 == 0){
            return "even";
        } 
        else{
            return "odd";
        }
    }
    $number = 12;
    $result = isEven_or_Odd($number);
    echo "$number is $result number.";

    echo "\n";

    $sum = 0;
    $value = 100;
    for ($i = 1; $i <= $value; $i++){
        $sum += $i;
    }
    echo "1+2+3.......$value The sum of the series will be = $sum.";