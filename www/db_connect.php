<?php
const HOST = 'mysql';
const USER = 'root';
const PASSWORD = 'root';
const DATABASE = 'quiz';

$tableName = 'results';

try {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

    $sql = "CREATE TABLE IF NOT EXISTS $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30), 
        total INT(6), 
        corect INT(6), 
        incorect INT(6))";
    $mysqli->query($sql);


} catch (mysqli_sql_exception $exception) {
    die('Connect ERROR ' . $exception);
}
