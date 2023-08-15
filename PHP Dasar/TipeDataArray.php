<?php
// Array adalah tipe data yang berisikan kosong atau banyak data
// Array di php bisa berisikan jenis berbeda beda
// Array di PHP memiliki panang dinamis, artinya kita bisa menambah data ke Array
// Sebanyak banyaknya, tidak dibatasi kapasitasnya.

$values = array(1,2,3,4);
var_dump($values);

$names = ["Firman", "Ivan", "Faisal"];
var_dump($names);

// Operasi Array
// $array[index] (Mengakses data di array pada nomor index)
// $array[index] = value (Mengubah data di array pada nomor index dengan value baru)
// $array[] = value (Menambah data di array pada posisi paling belakang)
// unset($array[index]) (Menghapus data di array, index otomatis hilang dari array)
// count($array) (Mengambil total data di array)

// $array[index]
echo $names[0];
echo "\n";

// $array[index] = value
$names[1] = "Sutrisno";
var_dump($names);

// $array[] = value
$names[] = "Doni Salmon";
var_dump($names);

// unset($array[index])
unset($names[0]); // Menghapus data index ke-0
var_dump($names);

// count($array)
echo "Jumlah Data Names: ";
echo count($names);
var_dump($names);
var_dump(count($names));

// Array sebagai Map
// Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value
// Namun di PHP, Map bisa dibuat menggunakan Array
// Secara default Array akan menggunakan index (number) sebagai key dan value nya kita bisa bebas memasukkan data ke dalam Array
// Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misal nya
// Hal tersebut terlihat seperti Map di bahasa pemrograman lain
echo "\n\n";

$faisal = array (
        "id" => "123",
        "name" => "RIFARA",
        "age" => 21
);

$budi = [
        "id" => "321",
        "name" => "Budi Nugraha",
        "age" => 25
];

var_dump($faisal);
var_dump($budi);

// Array di dalam Array
// Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
// Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
echo "\n\n";

$jos = array (
        "id" => "321",
        "name" => "Jos Nugraha",
        "age" => 30,
        "address" => [
                "city" => "Jakarta",
                "country" => "Indonesia"
        ]
        );

var_dump($jos);



?>
