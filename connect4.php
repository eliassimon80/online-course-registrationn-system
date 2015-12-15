<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("personal_db",$slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

$id= $_POST['id'];
$a = $_POST['email'];
$b = $_POST['password'];

//inserting into my table
$mysql = "INSERT INTO  contact(id,email,password) VALUES('$id', '$a', '$b')" or die("never wake up");
$result = mysql_query($mysql);

echo "Successful <a href='login.php'>Register Again</a>";
?>