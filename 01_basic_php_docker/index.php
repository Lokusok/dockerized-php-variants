<?php

include './helpers.php';

dd($_POST);
dd($_FILES);

if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];

    $extension = pathinfo($avatar['full_path'], PATHINFO_EXTENSION);

    $filename = time() . '@' . strtolower(substr($avatar['name'], 0, 10)) . '.' . $extension;
    rename($avatar['tmp_name'], './files/' . $filename);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button type="submit">Create</button>
    </form>
</body>

</html>