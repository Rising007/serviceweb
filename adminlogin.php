




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php  include 'link.php' ?>
</head>
<body>
<header>
<div class ="container center-div shadow padding-2 ">
 <div class = "heading text-center mb-5 text-uppercase text-danger"><b>Login page</b></div>
 <div class ="container row d-flex flex-row justify-content-center mb-5">
  <div class ="admin-form">
  <form action ="adminmainpage.php" method ="POST">
  <div class ="form-group">
  <label>E-mail</label>
  <input type = "text" name = "user" value ="" class = "form-control" autocomplete = "off">

 </div>
 <div class ="form-group">
  <label>Password</label>
  <input type = "text" name = "pass" value ="" class = "form-control" autocomplete = "off">

 </div>
 <input type ="submit" class = "btn btn-success" name="">
 
 </form>
 </div>

 </header>
 </body>
 </html>

