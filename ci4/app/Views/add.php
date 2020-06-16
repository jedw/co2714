<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            <h1>Beckipedia</h1>
            <p>
                ..The
                <a href="#">wrong encyclopedia</a>
                that
                <a href="#">nobody can edit</a>
            </p>
        </div>
        <?php include 'nav.php'; ?>
        <div class="container">
        <h1>Add</h1>
        <form method="post" name="frmAdd" action="<?php echo site_url('index.php/home/store');?>">
        
        <div class="form-group">
            <label for="Fname">First Name:</label>
            <input class="form-control" type="text" name="Fname" id="Fname">
        </div>  
        <div class="form-group">  
            <label for="Lname">Last Name:</label>
            <input class="form-control" type="text" name="Lname" id="Lname">
        </div>  
        <div class="form-group">  
            <label for="Address">Address:</label>
            <textarea class="form-control" name="Address" id="Address" rows="4" cols="16"></textarea> 
        </div>  
        <div class="form-group">  
            <label for="Email">Email Address:</label>
            <input class="form-control" type="text" name="Email" id="Email"> 
        </div>  
        <div class="form-group">  
            <label for="Mobile">Mobile No:</label>
            <input class="form-control" type="text" name="Mobile" id="Mobile"> 
        </div>
        <input class="btn btn-primary" type="submit" value="Add" name="btnadd">
</form>
        </div>
    </body>
</html>