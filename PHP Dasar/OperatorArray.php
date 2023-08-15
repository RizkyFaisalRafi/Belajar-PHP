<?php
// Di PHP, Array memiliki operator khusus
// Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda

$first = [
        "first_name" => "Rizky"
];

$last = [
        "last_name" => "Faisal"
];

var_dump($first + $last);

$a = [
        "first_name" => "Doni",
        "last_name" => "Salmon",
];

$b = [
        "first_name" => "Salmon",
        "last_name" => "Doni",
];

var_dump($a == $b);
var_dump($a === $b);

?>