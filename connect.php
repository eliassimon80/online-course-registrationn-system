<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("personal_db",$slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

$id= $_POST['id'];
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['subject'];
$e = $_POST['message'];

//inserting into my table
$mysql = "INSERT INTO  contact(id,name,email,phone,subject,message) VALUES('$id', '$a', '$b', '$c', '$d', '$e')" or die("never wake up");
$result = mysql_query($mysql);

echo "Successful <a href='contact.php'>Register Again</a>";
?>