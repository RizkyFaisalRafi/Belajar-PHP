<?php
/*
For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi

for(init statement; kondisi; post statement){
        block perulangan
}

Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
Post statement akan dieksekusi setiap kali diakhir perulangan
Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true
*/

// Perulangan Tanpa Henti
// for (;  ; ) { 
//         echo "Hello For Loop" . PHP_EOL;
// }

// Perulangan dengan kondisi
$counter = 1;
for (; $counter <= 10 ; ) { 
        echo "Hello For Loop" . $counter . PHP_EOL;
        $counter++;
}

echo "\n";

// Perulangan Dengan Init Statement
for ($counter = 1; $counter <= 10 ; ) { 
        echo "Hello For Loop" . $counter . PHP_EOL;
        $counter++;
}

echo "\n";

// Perulangan Dengan Post Statement
for ($counter = 1; $counter <= 10 ; $counter++) { 
        echo "Hello For Loop" . $counter . PHP_EOL;
}

echo "\n";

// Syntax Alternative For Loop
for ($counter = 1; $counter <= 10 ; $counter++) : 
        echo "Hello For Loop" . $counter . PHP_EOL;
endfor;

echo "\n";

?>