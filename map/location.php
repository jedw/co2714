<?php
    $servername = "localhost";
    $username = "student";
    $password = "website";
    $dbasename = "mydatabase";
    $locations = [];

    $mysqli = new mysqli($servername, $username, $password, $dbasename);

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $team = $_POST['Team'];

    $sql = "SELECT team, lat, lon FROM coords WHERE team = $team";
    $result = $mysqli->query ($sql);

    while($row = $result->fetch_assoc()){
        array_push($locations, $row);
    }

    header("Content-type: application/json");
    echo json_encode($locations);
?>