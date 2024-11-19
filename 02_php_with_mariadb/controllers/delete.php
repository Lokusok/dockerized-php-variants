<?php

declare(strict_types=1);

$conn = require('../database/connection.php');

deleteUser();

function deleteUser(): void
{
    global $conn;

    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = :id";

    $statement = $conn->prepare($sql);
    $statement->bindParam(':id', $id);

    $isSuccess = $statement->execute();

    if ($isSuccess) {
        echo "User with id {$id} successfully deleted" . "<br>";
    } else {
        echo "We are sorry... something went wrong" . "<br>";
    }

    echo '<a href="/index.php">Go home</a>';
}
