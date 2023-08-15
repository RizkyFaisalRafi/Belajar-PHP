<?php
// Epression
// Expression adalah bagian terpenting di PHP
// Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
// Secara sederhana, expression adalah apapun yang memiliki nilai atau value

$a = 5; // 5 adalah expression.
$b = $a; // a adalah expression.

// Pada kode dibawah, getValue() adalah expression, karena getValue() bernilai angka 100.
function getValue() {
        return 100;
}

$value = getValue();
echo $value;
echo "\n";

// Statement
// Statement bisa dibilang adalah kalimat lengkap dalam bahasa.
// Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma
$name = "Rizky Faisal Rafi";
echo $name;

$date = new DateTime();
var_dump($date);

// Block
// Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
// Block diawali dan diakhiri dengan kurung kurawal { }
function runApp($name) {
        echo "Start Program" . PHP_EOL;
        echo "Hello $name" . PHP_EOL;
        echo "End Program" . PHP_EOL;
}

$result = runApp("Faisal");
echo $result;





?>