<?php
require_once 'Kucing.php';
require_once 'Anjing.php';

$kucing = new Kucing();
$kucing->setNama("Milo");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("Bruno");
$anjing->setUmur(3);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan</title>
</head>
<body>

    <h2>Data Hewan</h2>

    <h3>Kucing</h3>
    <p>Nama: <?php echo $kucing->getNama(); ?></p>
    <p>Umur: <?php echo $kucing->getUmur(); ?> tahun</p>
    <p>Jenis: Kucing</p>
    <p>Suara: <?php echo $kucing->getSuara(); ?></p>

    <hr>

    <h3>Anjing</h3>
    <p>Nama: <?php echo $anjing->getNama(); ?></p>
    <p>Umur: <?php echo $anjing->getUmur(); ?> tahun</p>
    <p>Jenis: Anjing</p>
    <p>Suara: <?php echo $anjing->getSuara(); ?></p>

</body>
</html>