<?php
if (isset($_POST['uname'])) { //Check if form data has actually been posted
  $firstname = $_POST['fname']; //Initialize variables from POST data
  $surname = $_POST['sname'];
  $username = $_POST['uname'];
  $password = $_POST['pword'];
  $email = $_POST['email'];
  try{  
    $user = "student";
    $pass = "website"; // Your password will differ
    $handler = new PDO( 'mysql:host=localhost;dbname=mydatabase', $user, $pass ); //Establishing Connection with Server, your database name may differ
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){ 
    echo $e->getMessage();
    die();
  }

  $query = $handler->prepare ("INSERT into ajaxcheckuser (firstname, surname, username, password, email) VALUES (:fname, :sname, :uname, :pword, :email)"); //Write the query
  $query->bindParam(':fname', $firstname);
  $query->bindParam(':sname', $surname);
  $query->bindParam(':uname', $username);
  $query->bindParam(':pword', $password);
  $query->bindParam(':email', $email);
  $queryResult = $query->execute(); //Run the query
  if ($queryResult) { 
    //If executing the query returns TRUE then it has inserted correctly
    echo "Form Submitted successfully";
    echo "<br/><a href=\"register.php\">Back</a>";
  }
}
?>
