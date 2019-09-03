<?php
if (isset($_POST['uname'])) { //Check if form data has actually been posted
    $username   = $_POST['uname']; //Retrieve username from POST data
    try{  
        $user = "student";
        $pass = "website"; //Your password may differ
        $handler = new PDO( 'mysql:host=localhost;dbname=mydatabase', $user, $pass ); //Establishing Connection with Server, your database name may differ
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e){ 
        echo $e->getMessage();
        die();
      }
    $jsonReply  = array(); //Create an array for the JSON response 
    $query = $handler->prepare ("SELECT * FROM ajaxcheckuser WHERE username = :user"); //Write the query
    $query->bindParam(':user', $username); //Bind parameters
    $query->execute(); //Run the query
    $count = $query->rowCount();
    if ($count > 0) { //Do we have any results?
        $jsonReply['availability'] = false; //Set availability to false
        header('Content-Type:application/json;');
        echo json_encode($jsonReply); //Encode the array to JSON
    } else {
        $jsonReply['availability'] = true; //Set availability to true
        header('Content-Type:application/json;');
        echo json_encode($jsonReply); //Encode the array to JSON
    }
}
?>
