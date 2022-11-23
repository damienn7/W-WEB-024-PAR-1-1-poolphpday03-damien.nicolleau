<?php

function print_calls()
{
    static $number=0;
    $number++;
    echo "print_calls () ; // $number\n";
}