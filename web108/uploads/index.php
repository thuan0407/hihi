<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>

    <form action="upload_process.php" method="post" enctype="multipart/form-data">
        Tên file: <input type="file" name="file"><br><br>
        <input type="submit" value="Upload" name="btnFile">
    </form>
</body>
</html>
