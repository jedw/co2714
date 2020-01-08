 <?php
include 'connect2.php';

if(!isset(($_POST['search']))||($_POST['search'] ===""))
{
    $stmt = $mysqli->prepare ("SELECT firstname, surname, email from livesearch ORDER BY surname ASC");
}
else
{
    $search = '%'.$_POST['search'].'%';
    $stmt = $mysqli->prepare ("SELECT firstname, surname, email from livesearch where firstname like ? or surname like ? or email LIKE ? ORDER BY surname ASC");
    $stmt->bind_param('sss', $search, $search, $search); 
}

$stmt->execute();
$users = array();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
   array_push($users, $row);
}

$stmt->close();
$mysqli->close();

header("Content-type: application/json");
echo json_encode($users);
die();
?>
