<!DOCTYPE html>

<html>
<head><title>Lornster3000</title>
<link rel="stylesheet" type="text/css" href="theme.css">

</head>
<body>
	<h1>Lornster 3000</h1>
	<p>Enter your code below:</p>

<form method="POST">
 <textarea rows="20" cols="80" name="source_code" id="source_code">
	
<?php 
$default="#include <iostream> 
using namespace std; 
	 
int main() 
{ 
		 
	return 0; 	 
}";

if (isset($_POST['source_code'])){
		echo stripslashes($_POST['source_code']);
	 }
	 else { echo stripslashes($default); } ?>
	 </textarea>	 

 <br>
 <input type="hidden" name="language_id" value="10"/>
 <input type="submit" name="submit" value="submit"/>
</form>

<link rel="stylesheet" href="CodeMirror-master/lib/codemirror.css">
<script src="CodeMirror-master/src/codemirror.js"></script>
<script src="CodeMirror-master/mode/clike/clike.js"></script>
<script src="CodeMirror-master/addon/edit/matchbrackets.js"></script>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("source_code"), {
      lineNumbers: true,
      mode: "clike",
      matchBrackets: true
    });
</script>


<?php
if (isset($_POST['submit'])) {
	$url = 'https://api.judge0.com/submissions/';

	$ch = curl_init($url);

	$data = array(
		'source_code' => $_POST['source_code'],
		'language_id' => $_POST['language_id']
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
		
	$curl = curl_init();

	curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.judge0.com/submissions/".$returnArray['token'],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	$returnArray = json_decode($response, true);
	
	if ($returnArray['compile_output'] == NULL){
		echo "<div id=\"output\">";
		echo "<p>".nl2br($returnArray['stdout'])."</p>"; 
		echo "</div>";
	}
	else {
		echo "<div id=\"error\">";
		echo "<p>".nl2br($returnArray['compile_output'])."</p>"; 
		echo "</div>";
	}

	curl_close($curl);
}
?>
</body>
</html>
