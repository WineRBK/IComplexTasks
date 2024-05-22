<?php

$arr = [15, 78, 16, 92];


// Пузырьковая


// sort($arr);

// echo print_r($arr);


// for ($i = 0; $i < count($arr); $i++) {
//     for ($j = 0; $j < count($arr) - $i - 1; $j++) {
//         if ($arr[$j] > $arr[$j + 1]) {
//             $temp = $arr[$j];
//             $arr[$j] = $arr[$j + 1];
//             $arr[$j + 1] = $temp;
//         }
//     }
// }


// Сортировка вставкой

// for ($i = 1; $i < count($arr); $i++) {
//     $sorted = $i - 1;
//     while ($sorted >= 0 && $arr[$sorted] > $arr[$sorted + 1]) {
//         $temp = $arr[$sorted];
//         $arr[$sorted] = $arr[$sorted + 1];
//         $arr[$sorted + 1] = $temp;
//         $sorted--;
//     }
// }


// Сортировка выбором

// for ($i = 0; $i < count($arr) - 1; $i++) {
//     $minIndex = $i;
//     for ($j = $i + 1; $j < count($arr); $j++) {
//         if ($arr[$minIndex] > $arr[$j]) {
//             $minIndex = $j;
//         }
//     }

//     if ($minIndex != $i) {
//         $temp = $arr[$minIndex];
//         $arr[$minIndex] = $arr[$i];
//         $arr[$i] = $temp;
//     }
// }

//Сортировка слиянием

function mergeSort(array $arr)
{
    if (count($arr) > 1) {
        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        mergeSort($left);
        mergeSort($right);

        $i = $j = $k = 0;

        while ($i < count($left) && $j < count($right)) {
            if ($left[$i] < $right[$j]) {
                $arr[$k++] = $left[$i++];
            } else {
                $arr[$k++] = $right[$j++];
            }
        }

        while ($i < count($left)) {
            $arr[$k++] = $left[$i++];
        }

        while ($j < count($right)) {
            $arr[$k++] = $right[$j++];
        }
    }
    return $arr;
}



print_r(mergeSort(($arr)));




?>