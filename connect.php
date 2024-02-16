<?php
$dsn = 'mysql:host=localhost;dbname=products';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $db = new PDO($dsn, $user, $pass, $options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = "INSERT INTO items (name) VALUES ('بروجرم4')";
    $db->exec($q);
}

catch(PDOException $e){
    echo 'Failed ' . $e->getMessage();
}