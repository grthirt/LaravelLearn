<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<table width=" 600" border='1'>
    <tr>
        <th>编号</th>
        <th>账号</th>
        <th>密码</th>
    </tr>
    @foreach($user as $v)
        <tr>
            <td>{{$v -> id}}</td>
            <td>{{$v -> user}}</td>
            <td>{{$v -> pass}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>