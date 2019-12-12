<?php

spl_autoload_register(function ($class) {
    include('src/' . $class . ".php");
});

use modell\Konyv;

$conf=include("config.php");

$pdo = new \PDO($conf['db']['dsn'],$conf['db']['user'],$conf['db']['password']);
$sql = "SELECT * FROM konyv";
$statement = $pdo->prepare($sql);  // https://www.php.net/manual/en/class.pdostatement.php
$statement->execute();


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Könyveim</title>
</head>
<body>
<h1>Könyveim</h1>
<table id="nybooks">
    <tr>
        <th>
            Cim
        </th>
        <th>
            Szerző
        </th>
        <th>
            Kategória
        </th>
        <th>
            Kiadó
        </th>
        <th>
            Oldalainak száma
        </th>

    </tr>
    <?php /** @var $konyv Konyv */?>
    <?php while($konyv = $statement->fetchObject(Konyv::class)) : ?>
        <tr>
            <td>
                <?= $konyv->getCim(); ?>
            </td>
            <td>
                <?= $konyv->getSzerzo(); ?>
            </td>
            <td>
                <?= $konyv->getKategoria(); ?>
            </td>
            <td>
                <?= $konyv->getKiado(); ?>
            </td>
            <td>
                <?= $konyv->getOldalakSzama(); ?> oldal
            </td>

        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
