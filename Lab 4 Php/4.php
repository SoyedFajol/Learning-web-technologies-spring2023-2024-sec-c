<?php
     $num1 = 5;
     $num2 = 8;
     $num3 = 3;
 
     if($num1 > $num2 && $num1 > $num3) {
         echo "The largest number is " . $num1;
     } elseif ($num2 > $num1 && $num2 > $num3) {
         echo "The largest number is " . $num2;
     } else {
         echo "The largest number is " . $num3;
     }
?>


for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    for ($k = ord('A'); $k < ord('A') + $i; $k++) {
        echo chr($k) . " ";
    }
    echo "\n";
}
$array = array(
    array(1, 2, 3),
    array('A', 'B', 'C'),
    array('D', 'E', 'F')
);
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $array[$j][$i] . " ";
    }
    echo "\n";
}