<?php

function print_calls()
{
    static $number=0;
    $number++;
    print($number);
}