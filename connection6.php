<?php
//connection to the databse
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("personal_db",$slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

//get value
$la = $_POST['id'];
$lb = $_POST['applied'];
$lc = $_POST['sname'];
$ld = $_POST['oname'];
$le = $_POST['register'];
$lf = $_POST['dob'];
$lj = $_POST['age'];
$lg = $_POST['religion'];
$lh = $_POST['gender'];
$li = $_POST['nationalty'];
$lk = $_POST['marks'];
$ll = $_POST['adress'];
$lu = $_POST['box'];
$lt = $_POST['phone'];
$ly = $_POST['email'];
$lw = $_POST['image'];

//inserting into my table
$mysql = "INSERT INTO apply(id, applied, sname, oname, register, dob, age, religion, gender, nationalty, marks, adress, box, phone, email, image ) VALUES('$la', '$lb','$lc', '$ld', '$le', '$lf', '$lj', '$lg', '$lh', '$li', '$lk', '$ll', '$lu', '$lt', '$ly', '$lw')" or die("never wake up");
$res =  mysql_query($mysql);

echo "Successful <a href='Admission.php'>Register Again</a>";
?>