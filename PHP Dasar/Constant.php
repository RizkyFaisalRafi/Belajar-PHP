<?php
// Variable di PHP sifatnya mutable, artinya bisa dirubah
// Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
// Sebagai gantinya, terdapat fitur yang namanya constant
// Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
// Untuk membuat constant kita bisa menggunakan function define()
// Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

define("AUTHOR", "Programmer Indonesia");
// define("AUTHOR", "Programmer Indonesia"); // Error karena tidak bisa deklarasikan constant yg sama.
define("APP_VERSION", 1.1);

echo "Author: ";
echo AUTHOR;
echo "\n";
echo "App: ";
echo APP_VERSION;
echo "\n";

?>