<?php
// var_dump adalah sebuah function untuk ngedump sebuah data
// simpelnya var_dump itu melihat data dan tipe datanya apa
// Tipe Data Number Integer (Bilangan Bulat)
echo "Decimal : ";
var_dump(1234); // base 10

echo "Octal : ";
var_dump(01234); // base 8

echo "Hexadecimal : ";
var_dump(0x1A); // base 16

echo "Binary : ";
var_dump(0b11111111); // base 2

echo "Underscore di Number : ";
var_dump(1_234_567);

echo "\n";

// Tipe Data Number Floating Point (Bilangan Pecahan)
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3); // e3 = 1000

echo "Floating Point dengan E notation Minus (7 x 0.001)";
var_dump(7e-3); // e-3 = 0.001

echo "Underscore di Floating Point : ";
var_dump(1_234.567);

// Integer Overflow
// Kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit
// 9223372036854775807 untuk sistem operasi 64 bit
// Jika membuat number integer yang melebihi nilai tersebut maka secara otomatis tipe number akan
// berubah menjadi Floating Point.
echo "\n";

echo "Integer maks 32 Bit : ";
var_dump(2147483647);

echo "Integer maks 64 Bit : ";
var_dump(9223372036854775807);

echo "Integer Overflow 32 Bit : ";
var_dump(2147483648);

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775808);

?>