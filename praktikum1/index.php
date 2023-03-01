<?php 
// ini sebuah komentar 
/* ini sebuah komentar untuk yg panjang */

# ini sebuah komentar juga 

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Hasna Muthia <br> ");
// var_dump("STT Nurul Fikri");
// var_dump(123);

// membuat variabel user
$nama = "Hasna Muthia";
$umur = 19;
$berat = 46.5;
$mahasiswa = true;

// echo "Hallo, Nama saya $nama <br>";
// echo "Umurku $umur th <br>";
// echo "dan memiliki berat badan $berat kg";

// membuat variabel sistem
// echo "Dokument root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo "Nama File " . $_SERVER['PHP_SELF'];

// membuat variabel konstanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas";
// echo "<br>";
// echo "Luas lingkaran dengan jari-jari $jari = $keliling";

// membuat array
$programs = ["Php", "Javascript", "HMTL", "CSS"];
// echo $programs[0]; 
echo "Jumlah data sebanyak " . count($programs);

?>