<?php
echo mathOperation(1, 3, 'div');

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'sub':
            return $arg1 - $arg2;

        case 'add':
            return $arg1 + $arg2;

        case 'div':
            return $arg1 / $arg2;

        case 'mul':
            return $arg1 * $arg2;
    }
}


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
