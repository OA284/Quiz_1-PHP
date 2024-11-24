<?php
    function IsPrime($n)
    {
        for ($x = 2; $x < $n; $x++)
        {
            if ($n % $x == 0)
            {
                return 0;
            }
        }
        return 1;
    }

    $number = 10;
    $a = IsPrime($number);
    if ($a == 0 || $a == 1)
        echo $number.' is not a Prime Number.....' . "\n";
    else
        echo $number.' is a Prime Number..' . "\n";
?>
