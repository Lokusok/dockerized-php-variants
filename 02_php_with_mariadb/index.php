<?php

$conn = require('./database/connection.php');

$sql = "SELECT * FROM users ORDER BY id DESC";

$statement = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./controllers/create.php" method="POST">
        <input type="text" name="name" placeholder="Username">
        <button type="submit">Create</button>
    </form>

    <hr>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $statement->fetch()): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td>
                        <form action="./controllers/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">

                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>

    </table>
</body>

</html>