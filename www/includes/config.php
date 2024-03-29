<?php
// DB credentials.
define('DB_HOST', 'database');
define('DB_USER', 'docker');
define('DB_PASS', 'docker');
define('DB_NAME', 'docker');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}