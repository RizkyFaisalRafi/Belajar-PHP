<?php
/*
Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini,
lalu melanjutkan ke perulangan selanjutnya
*/

$counter = 1;

// Break
while (true) {
        echo "Hello Break : " . $counter . PHP_EOL;
        $counter++;

        // Berhenti karena break;
        if ($counter > 10) {
                break;
        }
}

echo "\n";
$counter2 = 1;

// Continue
for ($counter2 = 0; $counter2 <= 100 ; $counter2++) { 
        if ($counter2 % 2 == 0) {
                continue;
        }
        echo "Hello Continue : " . $counter2 . PHP_EOL;
}
?>