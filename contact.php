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
.style13 {color: #0000FF}
.style6 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style14 {color: #333333}
.style15 {color: #990000; }
.style16 {color: #993300}
-->
</style>
</head>
<body>
<div id="navigation">
  <ul>
   <li><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>| <a href="login.php">Login</a> |<a href="logout.php?logout">Logout</a> </li>  
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
        <h2 align="center" class="style15">For more information you can contact us through this </h2>
      </li>
      <li class="style15">        </li>
      <li>
        <h2 align="center" class="style15">Mobile No: +256773372360/256741628362 </h2>
      </li>
      <li>
        <h2 align="center" class="style13">Email:ceaser.onlineregistrationsystem.ug.com </h2>
      </li>
      <li class="style14">
        <div align="center" class="style16">
          <h2 align="center">Fill this form carefull and send your message to us  </h2>
        </div>
      </li>
      <li></li>
    </ol>
   <form name="form1" method="post" action="connect.php">
      <table width="354" border="0" align="center">
        <tr>
          <td width="8" height="25" rowspan="3">&nbsp;</td>
          <td width="325">&nbsp;</td>
          <td colspan="2" rowspan="11"><h3><b><font size="3"></font></b></h3></td>
        </tr>
        <tr>
          <td><b><strong><font size="2">Name</font></strong></b></td>
        </tr>
        <tr>
          <td height="32"><input type="text" name="name" placeholder="Your Name " required="required" data-validation-required-message="Please enter your name" /></td>
        </tr>
        <tr>
          <td height="16" rowspan="2">&nbsp;</td>
          <td><b><strong><font size="2">Email</font></strong></b></td>
        </tr>
        <tr>
          <td><input type="text" name="email" placeholder="Your Email "  required="required" data-validation-required-message="Please enter your email adress" /></td>
        </tr>
        <tr>
          <td rowspan="2">&nbsp;</td>
          <td><b><strong><font size="2">Phone</font></strong></b></td>
        </tr>
        <tr>
          <td><input type="text" name="phone" placeholder="Your phone"  required="required" data-validation-required-message="Please enter your phone number" /></td>
        </tr>
        <tr>
          <td rowspan="2">&nbsp;</td>
          <td><b><strong><font size="2">Subject</font></strong></b></td>
        </tr>
        <tr>
          <td><input type="text" name="subject" placeholder="Your Name "  required="required" data-validation-required-message="Please enter your subject" /></td>
        </tr>
        <tr>
          <td rowspan="2">&nbsp;</td>
          <td><b><strong><font size="3">Message</font></strong></b></td>
        </tr>
        <tr>
          <td><textarea name="message" cols="30" rows="10" class="form-control"  placeholder="Your Message" required="required" data-validation-required-message="Please enter a message"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" class="btn btn-xl">Send Message</button></td>
          <td width="2">&nbsp;</td>
          <td width="1">&nbsp;</td>
        </tr>
      </table>
    </form>
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
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
<div id="footer">
  <div id="div3"><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a>|<a href="contact.php">Contact Us</a>|<a href="login.php">Login</a>|<a href="logout.php">Logout</a><br />
  <span class="smallertext">&copy; Copyright 2015 - Your Web-site - All Rights Reserved - <a href="http://validator.w3.org/check?uri=referer" target="_blank">W3C Compliant XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">W3C Compliant CSS</a></div>
</div>
</body>
</html>
