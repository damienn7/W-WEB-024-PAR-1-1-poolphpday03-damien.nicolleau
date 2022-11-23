<?php

function teacher()
{
    echo "I am a Teacher";
}

function student(string $name)
{
    echo "I am a student and my name is $name";
}



$func_teacher='teacher';
$func_student='student';

$func_student('marco');
$func_teacher();