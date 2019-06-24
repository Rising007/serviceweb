<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="styles<link rel="stylesheet" href="font/css/fontawesome.min.css">  
	<link rel="stylesheet" href="css/bootstrap.min.css">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form text-center">
<p>Welcome to Dashboard.</p>
<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="view.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>