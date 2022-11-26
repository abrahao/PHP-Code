<?php

declare(strict_types=1);

$pdo = require('../connect.php');

$sql = 'SELECT * FROM cadastro';

echo '<h3> Produtos </h3>';

foreach ($pdo->query($sql) as $key => $value) {
    echo $value['personal_name'] . '<hr>';
}