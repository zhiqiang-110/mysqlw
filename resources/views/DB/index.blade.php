<table border="1px" width='400px'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach($stu as $row)
        <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['name']}}</td>
            <td>{{$row['email']}}</td>
        </tr>
        @endforeach
    </table>
    {{$stu->render()}}