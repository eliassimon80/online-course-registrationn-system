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
.style12 {
	color: #000066;
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style16 {	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
}
.style18 {color: #FF0000; font-family: "Times New Roman", Times, serif; }
.style19 {color: #003399; font-family: "Times New Roman", Times, serif; }
.style20 {color: #003399}
.style21 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>
<div id="navigation">
  <ul>
   <li><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php">Admission</a> | <a href="currentstudent.php">Current Students</a> |<a href="contact.php">Contact Us</a>|<a href="login.php">Login</a> | <a href="logout.php?logout">Logout</a> </li>
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
          <h2 align="center" class="style12">General guide to online registration system</h2>
        </div>
      </li>
      <li class="style16">
        <h2 align="center" class="style13"> Online Registration system </h2>
      </li>
      <li class="style16">
        <h2 align="center" class="style13">[Student Only]</h2>
      </li>
    </ol>
    <h3 align="justify" class="style18">introduction </h3>
    <h3 align="justify" class="style19">The Online Rgistration System allows students, through internet, to register, drop, or add courses within the registration period and the Advisor to do advising for the students by approving /rejecting requested courses by the student or recommending some others.</h3>
    <h3 align="justify" class="style19">1.1. What is the Online Registration system(ORS)?</h3>
    <h3 align="justify" class="style19">The system provides for students the option to register courses,without the advisor's prior approval, offered by their colleges during the scheduled registration periods. The students can modify their course selection by adding and /or dropping courses. However, when the registration period is over, all previously registration courses by the student will be viewable in the system.</h3>
    <ol>
      <li>
        <h3 align="justify" class="style19">2. The ORS Features:</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">The students may or may not have prior experience using such system. Ideally, any student can identify him/herself to the system, the to do the following:</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">1. Register, Add, or Drop Course/ courses online through a secured web access.</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">2. Pay registration fees Online through a secured web access.</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">3. Login information Policiy</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">The student should be in complaince with following:</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">The Login information (username and password) is the same as for the Evaluation and Modle systems and it is integrated with them .i.e. if the password has been changed for any of these systems. the online password will be change sub-sequentially and vice versa.</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">If the student loses or forgets his/her password,he/her should do the following:</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">a Pay 15 AED for reset password charges at the financial department.</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">b- Come to the I.T department with the receipt to request reset password.</h3>
      </li>
      <li>
        <h3 align="justify" class="style19">c-  The system password should consist of eight(8) digits minimum.</h3>
      </li>
      <li>
        <h3 align="left" class="style19">d-The University student Email should be active(&lt;student_id@aut.ae); and matnain the confidentiality of his/her login information</h3>
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
  <div id="div3"><a href="index.php">Home</a> |<a href=" about.php"> About Us</a> <a href="admission.php">Admission</a> | <a href="currentstudent.php">Current Students</a>|<a href="contact.php">Contact Us</a>|<a href="login.php">Login</a> |<a href="logout.php">Logout</a></a><br />
    <span class="smallertext">&copy; Copyright 2015 - Your Web-site - All Rights Reserved - <a href="http://validator.w3.org/check?uri=referer" target="_blank">W3C Compliant XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">W3C Compliant CSS</a></div>
</div>
</body>
</html>
