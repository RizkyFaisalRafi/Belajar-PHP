<?php
// If Statement
// Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
// Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
// Hampir di semua bahasa pemrograman mendukung if expression

// Blok if akan dieksekusi ketika kondisi if bernilai true
// Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
// Hal ini bisa dilakukan menggunakan else statement

// Kadang dalam If, kita butuh membuat beberapa kondisi
// Kasus seperti ini, di PHP kita bisa menggunakan Else If statement
// Else if di PHP bisa lebih dari satu
// Kode Else if di php bisa menggunakan “else if” atau “elseif” (digabung)

// Syntax If Statement:
// if (expression) {
//      statement;
// }

// if (expression) {
//      statement1;
//      statement2;
// }

$nilai = 70;
$absen = 80;

if ($nilai >= 80 && $absen >= 80) {
        echo "Grade A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
        echo "Grade B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
        echo "Grade C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
        echo "Grade D" . PHP_EOL;
}
else {
        echo "Anda Tidak Lulus" . PHP_EOL;
}

// Syntax Alternatif
// Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if,
// yaitu dengan menggunakan : (titik dua)
// Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement
if ($nilai >= 80 && $absen >= 80) : echo "Grade A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) : echo "Grade B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) : echo "Grade C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) : echo "Grade D" . PHP_EOL;
else : echo "Anda Tidak Lulus" . PHP_EOL;
endif;

?>