<?php

if (isset($_POST['uname'])) { //Check if form data has actually been posted
    $un   = $_POST['uname']; //Retrieve username from POST data

    include 'connect.php';
	
	$stmt = $mysqli->prepare("SELECT username FROM ajaxcheckuser WHERE username=?");
	$stmt->bind_param('s', $un);

	$stmt->execute();

	$user = $stmt->get_result()->fetch_assoc();
	
	
    if (!empty($user['username'])) { //Do we have any results?
        $jsonReply['availability'] = false; //Set availability to false
        header('Content-Type:application/json;');
        echo json_encode($jsonReply); //Encode the array to JSON
    } else {
        $jsonReply['availability'] = true; //Set availability to true
        header('Content-Type:application/json;');
        echo json_encode($jsonReply); //Encode the array to JSON
    }
    
    $stmt->close();
	$mysqli->close();
}
?>
