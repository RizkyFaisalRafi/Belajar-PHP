<?php
/*
Variable Function
PHP mendukung konsep yang bernama variable function
Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument,
kita bisa menggunakan $namaVariable(argument)
*/

function foo() {
        echo "Foo". PHP_EOL;
}

function bar($first) {
        echo "Bar $first" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName("Faisal");

function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
}

sayHello("Faisal", "strtoupper"); // Upper
sayHello("Faisal", "strtolower"); // Lower


?>