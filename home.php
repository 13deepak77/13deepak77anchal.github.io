<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>

<html>
<head>
<title>home page</title>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<a class="float-right" href="index.php"> <h2>LOGOUT </h2></a>
<h1> welcome</h1>
<h1> <?php echo $_SESSION['username'];?></h1>
</div>
</body>
</html>