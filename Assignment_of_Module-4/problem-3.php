<?php
    $students = [
        "Rahim",
        "Karim",
        "Shafik",
        "Salam",
    ];
    $n = count($students);
    for($i = 0; $i < $n; $i++){
        echo $students[$i]. "\n";
    } 
    echo "...........";
    echo "\n";

    $student1 = array_pop($students);
    $student2 = array_shift($students);

    $n = count($students);
    for($i = 0; $i < $n; $i++){
        echo $students[$i]. "\n";
    } 
    
    echo "\n";
    echo "The first element is ($student2) & last element is ($student1)";