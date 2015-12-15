<?php
//Start the session
session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include_once 'Server_connection.php';

//get the value from the form y passing to the btn-login
if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 //insert data to mysql
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Limey - Free Template</title>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style14 {color: #999999}
-->
</style>
</head>
<body>
<div id="navigation">
  <ul>
    <li><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="Admission.php"> |Admission</a> | <a href="Current Students.php">Current Students</a>|<a href="contact.php">Contact Us</a>| <a href="login.php">Login</a>| <a href="logout.php">Logout</a> </li>
  </ul>
</div>
<div id="head"><img src="images/Capture.PNG" alt="Limes" width="127" height="68" align="right" class="limeimage" />
  <h1 align="left"><span class="smallh1"><strong>ONLINE  COURSE REGISTRATION SYSTEM</strong></span></h1>
  <p align="left">www.ceaser.onlineregistrationsystem.ug.com</p>
</div>
<div id="bodyarea">
  <div id="maintextarea">
    <ol class="style6">
      <li>
      </li>
      <li></li>
    </ol>
  
  <table width="486" border="0" align="center">
    <tr>
      <td width="192">
	  <div id="main">
<div id="login">
	<h2>Register Form</h2>
<form method="post">
	<label>UserName :</label>
<input id="name" type="text" name="uname" placeholder="User Name" required />

	<label>Email :</label>
<input id="email" type="text" name="email" placeholder="Your Email" required />

	<label>Password :</label>
<input id="password" type="password" name="pass" placeholder="Your Password" required />
<br />
<input type="submit" name="btn-signup" value=" Login ">
<center><a href="login.php">Sign Up</a></center>

</form>
</div>
	  </td>
    </tr>
      </table>
</div>
  <div id="rightcolumntextarea">
    <h3>Right Column Heading</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <div id="speechbubble">
      <div id="speechbubblescrollbar">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
    </div>
    <p>&nbsp;</p>
  </div>
</div>
<div id="footer">
 <div id="div3"><a href="index.php">Home</a> |<a href=" about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>| <a href="login.php">Login</a>| <a href="logout.php">Logout</a><br />
    <span class="smallertext">&copy; Copyright 2015 - Your Web-site - All Rights Reserved - <a href="http://validator.w3.org/check?uri=referer" target="_blank">W3C Compliant XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">W3C Compliant CSS</a></div>
</div>
</body>
</html>
