<?php
$binatang = ["🐈", "🐇", "🐒", "🐨", "🐄"];
$makanan = ["🍔", "🌭", "🍟", "🍿", "🧀"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>

<body>
    <h3>Daftar Jekys sang binatang</h3>
    <!-- <ol>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol> -->

    <ol>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>

    <hr>

    <h1 style=text-align:center;>Daftar Makanan</h1>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?php echo $makanan[$i]; ?> </li>
        <?php } ?>
    </ul>
    <hr>
    <h1 style=text-align:center;>LOVE</h1>
    <p>Mc<b>L</b>aren</p>
    <p>Pajer<b>O</b></p>
    <p>Randro<b>V</b>er</p>
    <p> F<b>E</b>rari</p>

    <hr>

    <h3>Daftar Binatang </h3>
    <ol>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ol>

    <hr>

    <h3>Daftar Makanan </h3>
    <ol>
        <?php foreach ($makanan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>