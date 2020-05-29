@include("user.header")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>加载模板</h2>
    <h2>传过来的数据{{$a}}</h2>
    <h2>使用的函数{{time()}}</h2>
    <h2>html代码{!!$c!!}</h2>
    <h2>解析一维数组{{$arr['name']}},{{$arr['age']}}</h2>
    <table border="1px" width='400px'>
        <tr>
            <th>name</th>
            <th>age</th>
        </tr>
        @foreach($arr2 as $row)
        <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['age']}}</td>
        </tr>
        @endforeach
    </table>
    <h2>for练习</h2>
    @for($i = 1;$i <= 10;$i++)
    {{$i}}
    @endfor

    <h2>if的流程控制</h2>
    @if($d == 10)
    等于10
    @endif
    @if($d > 10)
    大于10
    @endif
</body>
</html>
@include("user.footer")