<?php

timeCalculator(2, 60);

function timeCalculator($hours, $minutes)
{
    if ($hours === 0 || ($hours >= 5 && $hours <= 20)) {
        echo "$hours часов";
    } else if (in_array($hours, array(1, 21))) {
        echo "$hours час";
    } else if (in_array($hours, array(2, 3, 4, 22, 23, 24))) {
        echo "$hours час";
    }

    if (($minutes === 0) || ($minutes >= 5 && $minutes <= 30) || (in_array($minutes, array(35, 36, 37, 38, 39, 40, 45, 46, 47, 48, 49, 50, 55, 56, 57, 58, 59, 60)))) {
        echo " $minutes минут";
    } else if (in_array($minutes, array(1, 21, 31, 41, 51))) {
        echo " $minutes минута";
    } else if (in_array($minutes, array(2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54))) {
        echo " $minutes минуты";
    }
}
