<?php

 session_start();

  if(!isset($_SESSION['username']))

    header("location:http://localhost/public_html/adminlogin.php");

  if($_SESSION['username']!='ashish')

    header("location:http://localhost/public_html/index.html");

$question=$_POST['question'];

$optiona=$_POST['optiona'];

$optionb=$_POST['optionb'];

$optionc=$_POST['optionc'];

$optiond=$_POST['optiond'];

$answer=$_POST['answer'];

$subject=$_POST['subject'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'onlinetestdb');

$q="insert into question (questions,optionA,optionB,optionC,optionD,ans,subject) values('$question','$optiona','$optionb','$optionc','$optiond','$answer','$subject')";

mysqli_query($con,$q);

mysqli_close($con);

header('location:http://localhost/public_html/createquestion.php');	

?>

