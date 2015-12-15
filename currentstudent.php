<?php
//Start the session
session_start();
include_once 'Server_connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ceaseronlinecourseregistrationsystem</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style15 {color: #000000}
.style16 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="navigation">
  <ul>
 <li><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>| <a href="login.php">Login</a> | <a href="logout.php?logout">Logout</a> </li>
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
       <table width="531" border="0">
         <tr>
           <td colspan="4"><h2 align="center"><span class="style16">Verify your enrollmet, order transcripts, check on your </span></h2></td>
         </tr>
         <tr>
           <td width="115" height="26"><h2><span class="style15"></span><img src="images/Capture.PNG" alt="Limes" width="71" height="76" align="right" class="limeimage" /></h2></td>
           <td width="130"><h2 align="left"><img src="images/pic6.jpg" alt="Limes" width="80" height="77" align="right" class="limeimage" /></h2></td>
           <td width="130"><h2><span class="style15"></span><img src="images/les.jpg" alt="Limes" width="80" height="79" align="right" class="limeimage" /></h2></td>
           <td width="138"><h2><span class="style15"></span><img src="images/pic8.jpg" alt="Limes" width="78" height="77" align="right" class="limeimage" /></h2></td>
         </tr>
         <tr>
           <td><h4 align="center">I am an Undergraduat </h4></td>
           <td><h4 align="center">I am an Undergraduat Student </h4></td>
           <td><h4 align="center">I am taking a break from College </h4></td>
           <td><h4 align="center">I am an alumnus </h4></td>
         </tr>
       </table>
       <h2>&nbsp;</h2>
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
