<?php
/*
Function Return Value
Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
*/
function sum(int $first, int $last) {
        return $first + $last;
}

$total = sum(10,20);
var_dump($total);

$total = sum(20,20);
var_dump($total);

function getFinalValue(int $value) {
        if ($value >= 90) {
                echo "A";
        } elseif($value >= 80) {
                echo "B";
        } elseif($value >= 70) {
                echo "C";
        } elseif($value >= 60) {
                echo "D";
        } elseif($value >= 50) {
                echo "E";
        } elseif($value >= 30) {
                echo "F";
        } else {
                echo "Anda Bodoh!";
        }
}
echo getFinalValue(85);

/*
Return Type Declarations
Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, 
bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
Untuk mendeklarasikan tipe data kembalian function, 
setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
*/
function sum2(int $first, int $second): int {
        return $first + $second;
}

function getFinalValue2(int $value): string {
        if ($value >= 90) {
                return "A";
        } elseif($value >= 80) {
                return "B";
        } elseif($value >= 70) {
                return "C";
        } elseif($value >= 60) {
                return "D";
        } elseif($value >= 50) {
                return "E";
        } elseif($value >= 30) {
                return "F";
        } else {
                return "Anda Bodoh!";
        }
}
echo sum2(10,10) . PHP_EOL;
echo getFinalValue2(50) . PHP_EOL;
?>