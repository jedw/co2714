<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <h1>Top secret members only area</h1>
    <p>Welcome <?php echo $_SESSION['username']; ?></p>
</body>
</html>