<?php

include_once './assets/elementos/head_home.php';

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=ist", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM pessoas");
    $statement->execute();
    $pessoas = $statement->fetchAll(PDO::FETCH_OBJ);

    echo "<h2>Pessoas</h2>";
    echo "<ul>";
    foreach ($pessoas as $pessoa ) {
        echo "<li>".$pessoa->nome."</li>"."<br>";
    }
    echo "</ul>";

} catch(PDOException $e) {
    echo $e->getMessage();
}

