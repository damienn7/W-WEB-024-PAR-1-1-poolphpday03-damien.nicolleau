<?php

function get_args()
{
    $arr = func_get_args();
    return $arr;
}

function get_last_arg()
{
    $index = func_num_args()-1;
    return $arg = func_get_arg($index);
}