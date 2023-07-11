<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: php/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" , content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/landing.css">
    
    <title>Jurident</title>
     
     
</head>
<body>
<div>
<?php echo "<h1>Logged in as " . $_SESSION['username'] . "</h1>"; ?>
</div>
<div>
<a href="profile.html">Profile</a>
<a href="php/logout.php">Log Out</a>

</div>
    <script src="js/index.js"></script>
</body>
</html>

