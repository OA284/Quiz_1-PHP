<?php
    function delEven($array){
        for ($i=0; $i < sizeof($array); $i++) { 
            if($array[$i] % 2 == 0){
                array_splice($array, $i, 1);
                $i--;
            }
        }
        foreach ($array as $value) {
            echo $value . "<br />";
        }
    }
    $arr = [10, 40, 30, 45, 20, 21];
    delEven($arr);
?>