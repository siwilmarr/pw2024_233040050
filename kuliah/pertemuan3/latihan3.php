<?php
echo "mulai <br>";
$nilai_awal = 1;
while ($nilai_awal <= 10) {
    echo "Hello Word $nilai_awal! <br>";
    $nilai_awal++;
}
echo "selesai <br>";

echo "<hr>";
echo "mulai <br>";
for ($nilai_awal = 10; $nilai_awal >= 1; $nilai_awal--) {
    echo "Hello Word! $nilai_awal <br>";
}
echo "selesai <br>";
?>

<?php
$nama_depan = "paduka";
$nama_belakang = "siwill";

for ($i = 1; $i <= 100; $i++) {
    echo "<br>";
    if ($i % 2 == 0 && $i % 10 == 0) {
        echo "$nama_depan $nama_belakang";
    } else if ($i % 2 == 0) {
        echo "$nama_depan";
    } else if ($i % 10 == 0) {
        echo "$nama_belakang";
    } else {
        echo "$i";
    }
}
?>
