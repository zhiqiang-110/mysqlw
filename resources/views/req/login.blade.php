<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/req" method="post">
        用户名:<input type="text" name="name" id=""><br>
        邮箱:<input type="text" name="email" id="" value="{{old('email')}}"><br>
        电话:<input type="text" name="tel" id="" value="{{old('tel')}}"><br>
        {{csrf_field()}}
        <input type="submit" value="登录">
    </form>
</body>
</html>