<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("personal_db",$slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

$id = $_POST['id'];
$a = $_POST['username'];
$b= $_POST['email'];
$c= $_POST['contact'];
$d= $_POST['password'];


//inserting into my table
$sql = "INSERT INTO  login(id, username,email,contact,password) values('$id', '$a', '$b', '$c','$d')";
$res = mysql_query($sql);

echo "Successful <a href='login.php'>Register Again</a>";
?>

