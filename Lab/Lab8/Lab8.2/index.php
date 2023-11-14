<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <input type="text" class="form-control" name="tieude" placeholder="ten">
        <textarea name="content" id="editor" class="form-control"></textarea>
        <input type="file" class="form-control" name="file"  >
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>
</html>