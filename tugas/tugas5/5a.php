<?php
$mahasiswa = [
    [
        "nama" => "Dzikrie Ezzy",
        "nim" => "233040052",
        "email" => "dzikriezzy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "jeki.jpeg"
    ],

    [
        "nama" => "Ghani Aliyandi",
        "nim" => "233040049",
        "email" => "ghanialiyandi12345@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "ghani.jpeg",
    ],

    [
        "nama" => "M. Hilmy Yasirurrizqy",
        "nim" => "233040037",
        "email" => "adasaja2134@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "hilmy.jpeg",
    ],

    [
        "nama" => "M. Sufi Nadziffa",
        "nim" => "233040044",
        "email" => "nadziffa123@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "supi.jpeg",
    ],

    [
        "nama" => "Zaki Ramadhan Wijaya",
        "nim" => "233040053",
        "email" => "zakiwijaya63@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "zaki.jpg",
    ],

    [
        "nama" => "Rafi Safiq Mulyadi",
        "nim" => "233040023",
        "email" => "rafisafiq556@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "sapik.jpeg",
    ],

    [
        "nama" => "Chalida Rahma Listy",
        "nim" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "darla.jpeg",
    ],

    [
        "nama" => "Daffa Al Bani",
        "nim" => "233040066",
        "email" => "daffaaibani56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "bani.jpeg",
    ],

    [
        "nama" => "Jhosua Jeremia M",
        "nim" => "233040064",
        "email" => "jhosuajeremiamatulessy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "joshua.jpeg",
    ],

    [
        "nama" => "M. Haikal Abinawa",
        "nim" => "233040083",
        "email" => "haikalabi29@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "haikal.jpeg",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>

    <h1>Data Mahasiswa UNPAS</h1>

    <?php foreach ($mahasiswa as $mhs) :  ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["foto"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>