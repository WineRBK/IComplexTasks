<?php

$currentSum = 0;

$arr = [10, 20, -30, 100, 80, -40, 50, 20, -10];



function findMax($currentSum, $arr)
{
    $maxSum = $currentSum;
    $indexMaxSum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $currentSum += $arr[$i];
        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $indexMaxSum = $i;
        }
    }
    return "Максимальный баланс: $maxSum\nИндекс максимального баланса: $indexMaxSum";
}
print_r(findMax($currentSum, $arr));

?>