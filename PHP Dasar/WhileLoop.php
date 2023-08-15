<?php
/*
While loop adalah versi perulangan yang lebih sederhana dibanding for loop
Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement 

Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan,
sedangkan di do while loop dilakukan setelah perulangan dilakukan.
*/

$counter1 = 1;
$counter2 = 1;


while ($counter1 <= 10) {
        echo "Hello While Loop : " . $counter1 . PHP_EOL;
        $counter1++;
}

echo "\n";

// Syntax Alternative While Loop
while ($counter2 <= 10) :
        echo "Hello While Loop : " . $counter2 . PHP_EOL;
        $counter2++;
endwhile;

?>