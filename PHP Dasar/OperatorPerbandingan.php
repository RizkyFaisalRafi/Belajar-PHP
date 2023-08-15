<?php
// Operator perbandingan, seperti namanya, digunakan untuk membandingan dua buah value
// Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar,
// false jika perbandingannya salah

var_dump("10" == 10); // bool(true)
var_dump("10" === 10); // bool(false)

var_dump("10" != 10); // bool(false)
var_dump("10" <> 10); // bool(false)

var_dump("10" !== 10); // bool(true)

var_dump("10" > 10); // bool(false)
var_dump("10" >= 10); // bool(true)

var_dump("10" < 10); // bool(false)
var_dump("10" <= 10); // bool(true)

?>