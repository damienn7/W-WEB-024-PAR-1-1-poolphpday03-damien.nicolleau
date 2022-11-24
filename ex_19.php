<?php

function calc(string $operation, int $nb1, int $nb2)
{
    switch($operation):
        case "/":
            $result = $nb1 / $nb2;
            break;
        case "%":
            $result = $nb1 % $nb2;
            break;
        case "-":
            $result = $nb1 - $nb2;
            break;
        case "+":
            $result = $nb1 + $nb2;
            break;
        case "*":
            $result = $nb1 * $nb2;
            break;
        default:
            $result=0;
            break;
    endswitch;

    return $result;
}