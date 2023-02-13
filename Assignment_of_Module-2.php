<?php

$tuition_fee = 25000;

    $commission = ($tuition_fee >= 20000) ? 0.25 * $tuition_fee :
                  (($tuition_fee >= 10000 && $tuition_fee < 20000) ? 0.20 * $tuition_fee :
                  (($tuition_fee >= 7000 && $tuition_fee < 10000) ? 0.15 * $tuition_fee :
                  "Invalid data"));
    
    echo "$commission";
