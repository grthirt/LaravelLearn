<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="/user/store" method="post">
    {{ csrf_field() }}
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit">
</form>
</body>
</html>
