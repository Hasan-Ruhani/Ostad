<?php 
$str1 = "Hello Ostad!";
$str2 = "ostad";

$val1 = strlen($str1);
$val2 = strlen($str2);

if ($val1 == 0 || $val2 == 0) {
  $output = $str1 . $str2;
} else {
  $overlap = 0;
  while ($overlap < $val1 && $overlap < $val2 && $str1[$val1 - $overlap - 1] == $str2[$overlap]) {
    $overlap++;
  }
  $output = substr($str1, 0, $val1 - $overlap) . $str2;
}

echo $output;

//You can also check this.

// $students = [
//     "Rahim",
//     "Karim",
//     "Shafik",
//     "Salam",
// ];
// echo $students[1].$students[3];



