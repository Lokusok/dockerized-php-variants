<?php

try {
    $conn = new PDO("mysql:host=db;port=3306;dbname=php_test", 'root', 'root', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (\Exception $e) {
    var_dump($e);
    exit;
}

return $conn;
