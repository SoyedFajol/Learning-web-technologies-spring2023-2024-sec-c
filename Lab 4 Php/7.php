<?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j ";
        }
        for ($k = ord('A'); $k < ord('A') + $i; $k++) {
            echo chr($k) . " ";
        }
        echo "\n";
    }
?>