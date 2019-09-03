<?php
$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];

function getPair($array)
{
    $pairCount = 0;
    for ($i = 1; $i <= count($array) - 1; $i++) {
        if ($array[$i] == $array[$i - 1]) {
            $pairCount++;
            }
    }
    echo $pairCount;
}

getPair($array);
