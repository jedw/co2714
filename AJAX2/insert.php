<?php
if (isset($_POST['uname'])) { //Check if form data has actually been posted
  $firstname = $_POST['fname']; //Initialize variables from POST data
  $surname = $_POST['sname'];
  $username = $_POST['uname'];
  $password = $_POST['pword'];
  $email = $_POST['email'];
  
  echo"testing";

  include 'connect.php';
  
  $stmt = $mysqli->prepare("INSERT into ajaxcheckuser (firstname, surname, username, password, email) VALUES (?,?,?,?,?)");
  $stmt->bind_param('sssss', $firstname, $surname, $username, $password, $email);
  $success = $stmt->execute(); 

  if ($success) { 
    //If executing the query returns TRUE then it has inserted correctly
    echo "Form Submitted successfully";
    echo "<br/><a href=\"register.php\">Back</a>";
  }
    $stmt->close();
	$mysqli->close();
}
?>
