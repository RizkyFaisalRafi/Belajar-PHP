<?php
// Dot Operator
// Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya)
// Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error.
// Oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain


$name = "Rizky Faisal Rafi";

echo "Nama: " . $name . PHP_EOL;
echo "Nilai: " . 100 . PHP_EOL;

// Konversi ke Number dan Sebaliknya
// Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya
// Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung ( tipe data )
// Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point
$valueString = (string)100; // Int to String
var_dump($valueString);

$valueInt = (int)"100"; // String to Int
var_dump($valueInt);

$valueFloat = (float)"100.11"; // String to Float
var_dump($valueFloat);

// Mengakses Karakter
// String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
// Sama seperti di array, index pertama dimulai dari 0
// Jika kita mengakses index melebihi karakter di string, maka akan terjadi error
$name = "Faisal";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

// Variable Parsing
// Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
// Ini memudahkan ketika kita ingin menggabungkan string dengan variable.
// Cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable nya.
$name = "Rafi";
echo "Hello $name, Selamat Belajar PHP." . PHP_EOL;

// Curly Brace
// Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
// Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
$var = "variable";
echo "This is {$var}s" . PHP_EOL;

?>