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
.style12 {
	color: #000066;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style21 {font-family: "Times New Roman", Times, serif}
.style14 {color: #000000; font-family: "Times New Roman", Times, serif; }
.style22 {color: #FF0000}
.style23 {color: #333333}
-->
</style>
</head>
<body>
<div id="navigation">
  <ul>
    <li><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>|<a href="login.php">Login</a> | <a href="logout.php?logout">Logout</a> </li>
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
        <div align="center">
          <ol class="style6">
            <li>
              <div align="center">
                <h2 class="style22">Registration &amp; Records </h2>
              </div>
            </li>
            <li>
              <div align="center">
                <h2 class="style23">Online Course Registration Forms </h2>
              </div>
            </li>
          </ol>
          <h2 align="center" class="style12">&nbsp;</h2>
        </div>
      </li>
    </ol>
    <ol class="style14">
      <li>
        <h3 class="style21">Note: This form is only for students not seeking a degree from Ceaser West Community&amp; Technical Colleage, complete the form, then click the Submit button. All fields must be completed.</h3>
      </li>
      <li>
        <h3 class="style21">Payment Disclosures: Terms and Conditions:</h3>
      </li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li>
        <h3>1. I understand that I am responsible for all charges for this registration at Ceaser West Community % Technical collage.</h3>
      </li>
      <li></li>
      <li></li>
      <li></li>
      <li>
        <h3>2. I understand that it is my responsiblility to read all policies and procedures as outlined in the student handbook.</h3>
      </li>
      <li>
        <h3>3. I understand that drop / add, withdrawal, and refund policies as outlined in the handbook.</h3>
      </li>
      <li>
        <h3>4. It is my understand that all tuition and fees in full for all classes that I am registered for after the fifth class day of any term.</h3>
      </li>
      <li>
        <h3 class="style21">5. I further understand that all tuition and fees are to be paid in full no later than the fifth day of any term unless a deferment is in effect. </h3>
      </li>
      <li>
        <h3 class="style21">6. I understand that I may be subject to late fees, I understand that if I have an unpaid balance, no further enrollment at Ceaser West will be permitted, that my unpaid balance will be turned over to a collection agency, and that I am fully responsible for any collection costs and fees. </h3>
      </li>
    </ol>
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
  <div id="div3"><a href="index.php">Home</a> |<a href=" about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>| <a href="login.php">Login</a>| <a href="logout.php">Logout</a><br />
    <span class="smallertext">&copy; Copyright 2015 - Your Web-site - All Rights Reserved - <a href="http://validator.w3.org/check?uri=referer" target="_blank">W3C Compliant XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">W3C Compliant CSS</a></div>
</div>
</body>
</html>
