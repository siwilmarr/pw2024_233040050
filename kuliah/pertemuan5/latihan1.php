<?php
// 1. membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["april", "maret", "agustus"];
$mhs = ["siwil", 3.8, false];
// 2. mencetak array (1)
// cetak 1 nilai menggunakan index
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";

// cetak seluruh array
// var_dump() atau print_r()
// digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
print_r($mhs);
echo "<br>";
echo "<hr>";

// 3. manipulasi array
// menambah isi array
// dibelakang: [] atau array_push()
$hari[] = "kamis";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "desember");
print_r($bulan);
echo "<br>";
// di awal array: array_shift()
array_unshift($mhs, 233040050);
print_r($mhs);
echo "<hr>";

// memnghapus isi array
// dibelakang : array_pop()
array_pop($hari);
print_r($hari);
echo "<br>";
// didepan : array_shift()
array_shift($bulan);
print_r($bulan);

// 4. mencetak array (2)
