<?php

spl_autoload_register(function ($class) {
    include('src/' . $class . ".php");
});

$conf=include("config.php");

$pdo = new \PDO($conf["dsn"],$conf['user'],$conf['password']);



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

</body>
</html>
