<?php


function calc($x, $y, $operation)
{
    switch ($operation) {
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
        case '*':
            return $x * $y;
            break;
        case '/':
            return $x / $y;
            break;
        default:
            return null;
    }

}
