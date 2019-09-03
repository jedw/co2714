<!DOCTYPE html>

<html>
<head><title>Lornster2000</title>

<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>
	<h1>Lornster 2000</h1>
	<p>Enter your code below:</p>
<form method="POST" >
 <textarea rows="20" cols="80" name="source">Enter code here</textarea>
 <br>
 <input type="submit" name="submit" value="submit"/>
</form>

<?php
if (isset($_POST['submit'])) {

	$url = 'https://api.jdoodle.com/v1/execute';

	$ch = curl_init($url);

	$data = array(
		'script' => $_POST['source'],
		'language' => 'cpp',
		'versionIndex' => '3',
		'clientId' => 'b3d82b0ec41fe5977b10efc4c6e094b0',
		'clientSecret' =>'2bdb659086573a77a8b42f6c916a53df153b5c439ea3448371a1f209317d0edf'
	);
	
	$payload = json_encode($data);

	//attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	//set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	//return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//execute the POST request
	$result = curl_exec($ch);
	//close cURL resource
	curl_close($ch);

	$returnArray = json_decode($result, true);

	if (!isset($returnArray['error'])){
		echo "<div id=\"output\">";
		echo "<p>".nl2br($returnArray['output'])."</p>"; 
		echo "</div>";
	}

	unset($returnArray);
}
?>
</body>
</html>
