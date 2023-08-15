<?php
// Variabel adalah tempat untuk menyimpan data
// Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
// Penamaan variable tidak boleh mengandung spasi

$name = "Faisal";
$age = 21;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;

echo "\n\n";

// Variable Variables
// PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
// Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
// Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya

$name2 = "Rafi";
$$name2 = "Keren";

echo "\$name = ";
echo $name2;
echo "\n";
echo "\$Rafi = ";
echo $Rafi;
echo "\n";
?>