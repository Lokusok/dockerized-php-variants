<?php

declare(strict_types=1);

$conn = require('../database/connection.php');

createUser();

function createUser(): void
{
    global $conn;

    $name = $_POST['name'];

    $sql = "INSERT INTO users (name) VALUES (:name)";

    $statement = $conn->prepare($sql);
    $statement->bindParam(':name', $name);

    $statement->execute();

    $lastId = $conn->lastInsertId();

    echo "Successfully insert user with id {$lastId}" . "<br>";
    echo '<a href="/index.php">Go home</a>';
}
