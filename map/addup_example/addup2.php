
<?php
if (!isset($_GET['a'])||!isset($_GET['b'])){
	$response['status'] = "ERROR, one or more parameters not provided";
        header("Content-type: application/json");
        echo json_encode($response);
        die();
    }
    if(is_numeric($_GET['a']) && is_numeric($_GET['b'])){
        $response['status'] = "OK";
        $response['answer'] = $_GET['a'] + $_GET['b'];
    }
    else{
        $response['status'] = "ERROR, one or more parameters invalid - must be numeric";
    }
	header("Content-type: application/json");
    echo json_encode($response);
    die();
?>
