<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>This is dockerized Nginx</h1>
  <p>Hello world</p>

  <p>Current time: <b><?= date('h-i-s A') ?></b> </p>

  <hr>

  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="file" name="avatar">
    </div>

    <div>
      <button type="submit">Upload</button>
    </div>
  </form>

</body>

</html>