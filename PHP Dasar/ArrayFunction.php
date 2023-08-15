<?php
/*
Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array.
https://www.php.net/manual/en/ref.array.php 
*/

$data = [1,2,3,4,5,6,7];

var_dump(array_map(fn($data) => $data * 2, $data));
echo "\n";

rsort($data);
var_dump($data);
echo "\n";

var_dump(array_keys($data));
echo "\n";

var_dump(array_values($data));


?>