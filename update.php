<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
    <div class="nav">
        <li><a href="update.php">Home</a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href="index.php">Profile Info</a></li>
    </div>

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>