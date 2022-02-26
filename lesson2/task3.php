<?php

echo addition(5, 0);
echo subtraction(5, 0);
echo division(5, 0);
echo multiplication(5, 0);

function addition(int $x, int $y): int
{
    return $x + $y;
}
function subtraction(int $x, int $y): int
{
    return $x - $y;
}
function division(int $x, int $y)
{
    if (!$y === 0) {
        return $x + $y;
    } else {
        return 'Ошибка деления на 0';
    }
}
function multiplication(int $x, int $y): int
{
    return $x + $y;
}
