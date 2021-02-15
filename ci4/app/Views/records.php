<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"> 

        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            <h1>Sillipedia</h1>
            <p>
                ..The
                <a href="#">wrong encyclopedia</a>
                that
                <a href="#">nobody can edit</a>
            </p>
        </div>
        <?php include 'nav.php'; ?>
        <div class="container">
        <h1>Records</h1>
        <table  class="table table-striped">
            <thead><tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr></thead>
            <tbody>
            <?php
                foreach($students as $student){
            ?>
            <tr>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['mobile']; ?></td>
                <td><a href="<?php echo site_url('home/edit/'.$student['id']);?>">Edit</a>&nbsp;<a href="<?php echo site_url('home/delete/'.$student['id']);?>">Delete</a></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        </div>
    </body>
</html>