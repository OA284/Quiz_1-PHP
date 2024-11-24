<?php
    function findMax($arr){
        $max = -99999999;
        for ($i=0; $i < sizeof($arr); $i++) { 
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
        echo "The max is $max";
    }
    $array = [70, 30, 20];
    findMax($array);
?>