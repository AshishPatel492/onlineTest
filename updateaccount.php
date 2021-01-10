<?php

session_start();
if(!isset($_SESSION['username']))
  header('location:http://localhost/public_html/adminlogin.php');
if($_SESSION['username']=='ashish')
  header('location:http://localhost/public_html/adminhome.php');
$username=$_SESSION['username'];
$password=$_POST['password'];
$myfile=$_FILES['myfile'];
$file=$_FILES['myfile']['name'];
$filedir="./userimage/";
$filepath=$filedir.$file;

 if(file_exists("userimage/".$myfile['name']))
   {
     echo $myfile['name']." already exists";
   }
  else if($myfile['type']=="image/jpeg")
   {
    move_uploaded_file($myfile['tmp_name'],"userimage/".$myfile['name']);
    //echo "file sucessfully uploaded!"; 

   }
  else
  {
    echo "File Format is Not Valid, unable to Upload It!!";
  }
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'onlinetestdb');
$q="update user set password = '$password' where username = '$username' ";
$q2="update user set image = '$filepath' where username = '$username' ";
mysqli_query($con,$q);
mysqli_query($con,$q2);
mysqli_close($con);
header('http://localhost/public_html/myaccount.php');
?>