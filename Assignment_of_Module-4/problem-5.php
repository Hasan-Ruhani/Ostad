<?php
    function findSecondlargest($arr) {
        if(empty($arr)) {
            return;
        }

        $max = PHP_INT_MIN;
        $secondMax = PHP_INT_MIN;

        foreach($arr as $number) {

                if($number > $max) {
                    $secondMax = $max;
                    $max = $number;
                }

            if($number > $secondMax && $number < $max) {
                $secondMax = $number;
            }
        }
        return $secondMax;
    }
    $arr = array(100, 40, 12, 15, 185, 90, 79, 69, 55, 30, 21);
    $second_maximum = findSecondlargest($arr);
    echo "Second Largest Number is ".$second_maximum;