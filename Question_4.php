<?php
    function calculateAverage($array) {
        $sum = 0;
        $count = 0;
        foreach ($array as $value) {
            $sum += $value;
            $count++;
        }
        return $sum / $count;
    }
    $arr = [1, 2, 3];
    $average = calculateAverage($arr);
    echo "The average is: " . $average;
?>