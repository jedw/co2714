<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    {!!Form::open(array('url'=>'login/register','method'=>'post'))!!}
        Username:<input type="text" name="username" id="username"/><br>
        Password:<input type="password" name="password" id="password"/><br>
        <input type="submit" name="submit" value="submit"/>
    {!!Form::close()!!}
</body>
</html>