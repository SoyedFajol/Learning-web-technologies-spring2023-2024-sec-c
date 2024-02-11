<?php
    $array = [1, 2, 3, 4, 5]; 
    $searchElement = 3;

    $found = false;
    foreach ($array as $element) {
        if ($element == $searchElement) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Element found in the array.";
    } else {
        echo "Element not found in the array.";
    }
?>