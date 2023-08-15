<?php
// Nilai NULL merepresentasikan sebuah variable tanpa nilai.
// Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut,
// kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
$name = "Rafi";
// $name = null;

$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";

// Mengecek apakah Data bernilai null atau tidak,
// bisa menggunakan Function is_null($variable) ataupun var_dump($variable)
echo "Is name null ? : ";
echo is_null($name); // Outputannya Boolean 0 dan 1.
echo "\n";

echo "Is age null ? : ";
echo is_null($age); // Outputannya Boolean 0 dan 1.
echo "\n";

$isNull = is_null($name);
var_dump($isNull);

// Menghapus Variable
// Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variable, caranya dengan menggunakan function unset($variable)
// Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function is_null($variable) pun akan menjadi error jika mengakses variable tersebut.
// Agar lebih aman, kita bisa menggunakan function isset($variable) untuk mengecek apakah sebuah variable ada dan nilainya tidak NULL
echo "\n";

$value = "Rizky";
unset($value);

var_dump(isset($value));

$value = "Rizky";
var_dump(isset($value));
echo $value;

echo "\n";
?>