<?php
// Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
// Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan
// Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
// Namun untungnya di php ada null coalescing operator menggunakan tanda ??

// isset adalah sebuah fungsi dalam bahasa pemrograman PHP yang digunakan untuk memeriksa apakah suatu variabel telah didefinisikan dan memiliki nilai (tidak NULL).

// Kode bukan Null Coalesting Operator
$data = [];

if (isset($data['action'])) {
        $action = $data['action'];
} else {
        $action = 'nothing';
}
echo $action;

echo "\n";

// Kode : Null Coalescing Operator 
$action = $data['action cuy'] ?? 'nothing cuy';
echo $action;

?>