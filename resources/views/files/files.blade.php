<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多文件上传</title>
</head>
<body>
    <form action="/files" method="post" enctype="multipart/form-data">
        文件1<input type="file" name="name[]" id=""><br>
        文件2<input type="file" name="name[]" id=""><br>
        文件3<input type="file" name="name[]" id=""><br>
        {{csrf_field()}}
        <input type="submit" value="上传">
    </form>
</body>
</html>