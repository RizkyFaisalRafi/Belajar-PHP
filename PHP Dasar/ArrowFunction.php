<?php
/*
Arrow Function
Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan,
tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci use
Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
Arrow function di khususnya untuk pembuatan function yang sederhana.
*/

$firstName = "BeSmart";
$lastName = "Indonesia";

$sayBeSmart = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayBeSmart();

?>