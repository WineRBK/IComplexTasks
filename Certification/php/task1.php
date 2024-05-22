<?php


$data = [
    [
        'name' => 'computer',
        'mass' => 12,
    ],
    [
        'name' => 'pamelo',
        'mass' => 4,
    ],
    [
        'name' => 'watermelon',
        'mass' => 12,
    ],
    [
        'name' => 'bottle',
        'mass' => 2,
    ],
    [
        'name' => 'iphone',
        'mass' => 4,
    ],
    [
        'name' => 'gamepad',
        'mass' => 2,
    ],
    [
        'name' => 'gamepad',
        'mass' => 2,
    ]
];


function countMass($data)
{
    $total = 0;
    for ($i = 0; $i < count($data); $i++) {
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$i]["mass"] == $data[$j]["mass"]) {
                $total++;
            }
        }
    }
    return "Количество пар: $total";
}

echo countMass($data);
