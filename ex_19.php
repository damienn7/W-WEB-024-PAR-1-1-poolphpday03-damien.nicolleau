<?php

function calc(string $operation, int $nb1, int $nb2)
{
    switch($operation):
        case "/":
            if($nb1<$nb2) $result = $nb2 / $nb1;
            else $result = $nb1 / $nb2;
            break;
        case "%":
            if($nb1<$nb2) $result = $nb2 % $nb1;
            else $result = $nb1 % $nb2;
            break;
        case "-":
            if($nb1<$nb2) $result = $nb2 - $nb1;
            else $result = $nb1 - $nb2;
            break;
        case "+":
            $result = $nb1 + $nb2;
            break;
        case "*":
            $result = $nb1 * $nb2;
            break;
        default:
            $result=false;
            break;
    endswitch;


    return $result;
}