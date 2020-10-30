<?php
if (isset($_POST['uname'])) { //Check if form data has actually been posted
    $fn = $_POST['fname']; //Initialize variables from POST data
    $sn = $_POST['sname'];
    $un = $_POST['uname'];
    $pw = $_POST['pword'];
    $em = $_POST['email'];

    include 'connect.php';
    
    $stmt = $mysqli->prepare("INSERT into ajaxcheckuser (firstname, surname, username, password, email) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssss', $fn, $sn, $un, $pw, $em);
    $success = $stmt->execute(); 

    if ($success) { 
        //If executing the query returns TRUE then it has inserted correctly
        echo "Form Submitted successfully";
        echo "<br/><a href=\"index.php\">Back</a>";
    }
    $stmt->close();
    $mysqli->close();
}
?>
