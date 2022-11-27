<link rel="stylesheet" href="../../assets/style.css">
<link rel="stylesheet" href="">
<?php

// declare(strict_types=1);

$pdo = require('../connect.php');

$sql = 'SELECT * FROM cadastro';

require __DIR__ . './../../assets/header2.php';

echo '<h3> Pessoas </h3>';

foreach ($pdo->query($sql) as $key => $value) {

    echo $value['personal_name'] . '<br>';
}