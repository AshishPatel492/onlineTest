<?php

session_start();

$username=$_POST['username'];

$password=$_POST['password'];

if($username=="ashish")

   header('location:http://localhost/public_html/adminlogin.php');

else

{

  /* Establish Connection with mysqli */

  $con=mysqli_connect('localhost','root');

  mysqli_select_db($con,'onlinetestdb');

  $q="select * from user where username='$username' && password='$password'";

  $result=mysqli_query($con,$q);

  $row_count=mysqli_num_rows($result);

  if($row_count==1)

  {

    $row=mysqli_fetch_array($result);

    $_SESSION['username']=$row['username'];

    header('location:http://localhost/public_html/home.php');

   }

  else

  	header('location:http://localhost/public_html/userlogin.php');



  

}

?>