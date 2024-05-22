<?php

$name = 'asdasdasdasdasdqweqweughnyuisssruhif';

$nameArr = str_split($name);

$uniqueArr = array_unique($nameArr);

if (count($uniqueArr) % 2 == 0) {
    echo "BOY";
} else {
    echo "GIRL";
}
