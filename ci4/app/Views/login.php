<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
    <form method="POST" name="frmLogin" action="<?php echo site_url('login/login_post');?>">
            
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" type="text" name="username" id="username">
            </div>  
            <div class="form-group">  
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>  
            
            <input class="btn btn-primary" type="submit" value="regsiter" name="submit">
    </form>
</body>
</html>

