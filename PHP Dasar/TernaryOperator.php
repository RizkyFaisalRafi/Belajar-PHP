<?php
// Penggunaan if statement pada kasus seperti bisa dipersingkat menggunakan ternary operator
// Ternary operator menggunakan kata kunci ? dan 

// Kode bukan Ternary Operator:
$gender = "PRIA";

$hi = null;
if ($gender == "PRIA") {
        $hi = "Hi Bro";
} else {
        $hi = "Hi Eveyone";
}

echo $hi . PHP_EOL;

// Kode Ternary Operator
$hi = $gender == "PRIA" ? "Hi Brother": "Hi Everyone";
echo $hi . PHP_EOL;

?>