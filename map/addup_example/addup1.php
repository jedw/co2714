<?php
	$response['answer'] = $_GET['a'] + $_GET['b'];

    	header("Content-type: application/json");
    	echo json_encode($response);
?>
