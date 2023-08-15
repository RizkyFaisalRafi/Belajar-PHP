<?php
// Tipe data string adalah tipe data representasi dari teks
// String bisa mengandung kosong atau banyak karakter
// Single Quote : ''
// Double Quote : ""

echo 'Name: ';
echo 'Rizky Faisal';
// Kelebihan menggunakan double quote yaitu bisa menggunakan escape sequence
// Seperti: \n, \t, dan lain lain. 
echo "\n";
echo "Jurusan:\n";
echo "Teknik\tInformatika\n\n";

// Heredoc adalah fitur untuk membuat String yang panjang.
// Heredoc
echo <<<FAISAL
Ini adalah contoh string yang sangat
panjang, dan juga tidak perlu mengetik ENTER
secara manual, "bisa double quote" juga
dengan menggunakan heredoc. \n\n
FAISAL;

// Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki
// kemampuan parsing seperti di Heredoc atau Double Quote. Parsing akan dibahas di materi Manipulasi String.
// Nowdoc
echo <<<'FAISAL'
Ini adalah contoh string yang sangat
panjang, dan juga tidak perlu mengetik ENTER
secara manual, "bisa double quote" juga
dengan menggunakan Nowdoc.
FAISAL;
?>