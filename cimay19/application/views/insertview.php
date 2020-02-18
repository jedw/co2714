<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Insert New Record</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
<?php include 'navbar.php'; ?>
	 <div class="container">
   <h1>Insert New Record</h1>
   <?php //echo validation_errors(); ?>
   <?php echo form_open('Mycontroller/insert_post'); ?>
     <label for="forname">Forname:</label><br/>
     <input class="form-control" type="text" size="20" id="forname" name="forname"/>
     <br/>
     <label for="surname">Surname:</label><br/>
     <input class="form-control" type="text" size="20" id="surname" name="surname"/>
     <br/>
	 <label for="age">Age:</label><br/>
     <input class="form-control" type="text" size="3" id="age" name="age"/>
     <br/>
     <input class="btn btn-primary" type="submit" value="CreateRecord"/>
   </form>
      </div>
 </body>
</html>