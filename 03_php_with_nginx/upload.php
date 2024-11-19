<?php

if (isset($_FILES['avatar'])) {
    $avatar = $_FILES['avatar'];

    $extension = pathinfo($avatar['full_path'], PATHINFO_EXTENSION);

    $filename = time() . '@' . strtolower(substr($avatar['name'], 0, 10)) . '.' . $extension;
    move_uploaded_file($avatar['tmp_name'], './files/' . $filename);
}

header('Location: index.php');
