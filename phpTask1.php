<?php

$substring = 'asd';
$arr = ['asdasdwqedfgdfg', 'asdertert', 'qwotjghriyhvbfkt'];


function foo(array $arr, string $substring)
{
    for ($i = 0; $i < count($arr); $i++) {
        if (str_contains($arr[$i], $substring)) {
            $arr_A[] = $arr[$i];
        } else {
            $arr_B[] = $arr[$i];
        }
    }
    return print_r($arr_A) . print_r($arr_B);
}

echo foo($arr, $substring);

?>