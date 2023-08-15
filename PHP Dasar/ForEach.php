<?php
/*
Kadang kita biasa mengakses data array menggunakann perulangan
Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter,
lalu mengakses array menggunakan counter yang kita buat
Namun untungnya, di PHP terdapat perulangan for each, 
yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis
*/

// Tanpa For Each
$names = ["Rizky", "Faisal", "Rafi"];

for ($i = 0; $i < count($names) ; $i++) { 
        echo "Hello $names[$i]" . PHP_EOL;
}

echo "\n";

// Menggunakan For Each
foreach ($names as $name) {
        echo "Hello $name" . PHP_EOL;
}

echo "\n";

// Menggunakan For Each dengan Key
$person = [
        "first_name" => "Rizky",
        "middle_name" => "Faisal",
        "last_name" => "Rafi",
];
foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
}

?>