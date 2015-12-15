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
<title>www.ceaseronlinecourseregistrationsystem</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {color: #FFFF00; font-family: "Times New Roman", Times, serif; }
.style15 {color: #990000; }
.style17 {color: #993300}
.style18 {color: #FF0000}
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
      <li></li>
      <li>
        <h2 align="center" class="style15"><span class="section-title style18">Student Online Registration Form</span></h2>
      </li>
      <li>
        <div align="center" class="style17">
          <h4>Fill this form carefully before sending your information to us </h4>
        </div>
      </li>
    </ol>
  <form name="form1" method="post" action="connection6.php">
	  <div class="form-group">
								<label>Name of Certified Applied</label>
								<input type="text" name="applied" class="form-control" placeholder="Your name of Certified Applied">
		    <label>Surname</label>
                                <input type="text" name="sname" class="form-control" placeholder="Your Name" />
</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
										<label></label>
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
										<label>Other Names</label>
										<input type="text" name="oname" class="form-control" placeholder="your Other Name">
									    <label>Registration No</label>
								       <input type="text" name="register" class="form-control" placeholder="registration No">
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
										<label>Date of Birth</label>
										<input type="text" name="dob" class="form-control" placeholder="dd/mm/yy">
									    <label>Age</label>
                                        <input type="text" name="age" class="form-control" placeholder="your age" />
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
										<label></label>
										<label>Religion</label>
                                        <input type="text" name="religion" class="form-control" placeholder="Your religion" />
                                        <label>Gender</label>
                                        <input type="text" name="gender" class="form-control" placeholder="male/female" />
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
										<label></label>
										<label>Nationality</label>
                                        <input type="text" name="nationalty" class="form-control" placeholder="Your Nationality" />
                                        <label>Identification Marks</label>
                                        <input type="text" name="marks" class="form-control" placeholder="Eyes/physical marks on body" />
                                        <label></label>
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
										<label></label><label>Contact Adress</label>
                                        <input type="text" name="adress" class="form-control" placeholder="your Adress" />
									    <label>P.O.Box Number</label>
                                        <input type="text" name="box" class="form-control" placeholder="P.O.Box Number" />
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
										<label></label>
										<label>Telephone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone number" />
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email address" />
                                        <label></label>
								  </div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
									  <label>Upload Picture</label>
                                        <input name="image" id="image" accept="image/jpeg" type="file" />
</div>
								</div>
								<div class="col-md-6">
								  <div class="form-group">
									  <label></label>
								  </div>
								</div>
	  </div>
							
							<p>
							  <label>
							  <input name="Submit" type="submit" class="smallh1" value="Login to Register" />
							  </label>
						    <br/></p>
	</form>
   <h2>&nbsp;</h2>
  </div>
</div>
<div id="footer">
  <div id="div3"><a href="index.php">Home</a> |<a href="about.php"> About Us</a> <a href="admission.php"> |Admission</a> | <a href="currentstudent.php">Current Students</a>|<a href="contact.php">Contact Us</a>|<a href="login.php">Login</a>|<a href="logout.php">Logout</a><br />
  <span class="smallertext">&copy; Copyright 2015 - Your Web-site - All Rights Reserved - <a href="http://validator.w3.org/check?uri=referer" target="_blank">W3C Compliant XHTML</a> - <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">W3C Compliant CSS</a></div>
</div>
</body>
</html>
