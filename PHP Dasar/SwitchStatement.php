<?php
// Switch Statement
// Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
// Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
// Kondisi di switch statement hanya untuk perbandingan ==

$nilai = "A";

switch ($nilai) {
        case "A":
                echo "Anda lulus dengan sangat baik" . PHP_EOL;
                break;
        case "B":
        case "C":
                echo "Anda Lulus" . PHP_EOL;
                break;
        case "D":
                echo "Anda tidak lulus" . PHP_EOL;
                break;
        default:
                echo "Anda Salah Jurusan" . PHP_EOL;

}

// Syntax Alternatif
// Sama seperti if statement, switch statement juga bisa tanpa menggunakan {} (kurung kurawal)
// Namun diakhir switch statement, kita harus menambahkan kata kunci endswitch
switch ($nilai) :
        case "A":
                echo "Anda lulus dengan sangat baik." . PHP_EOL;
                break;
        case "B":
        case "C":
                echo "Anda Lulus." . PHP_EOL;
                break;
        case "D":
                echo "Anda tidak lulus." . PHP_EOL;
                break;
        default:
                echo "Anda Salah Jurusan." . PHP_EOL;
endswitch;

?>