<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$bdate=$_POST['birthdate'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$password=$_POST['password'];
$file=$_FILES['myfile'];
$name=$file['name'];
$filepath=$file['tmp_name'];
$filedir="./userimage/".$name;
// if(file_exists("userimage/".$myfile['name']))
  //  {
    //  echo $myfile['name']." already exists";
  //  }
  // else if($myfile['type']=="image/jpeg")
  //  {
    move_uploaded_file($filepath,$filedir);
  //  }
  // else
  // {
    // echo "File Format is Not Valid, unable to Upload It!!";
  // }
  $filepath=$filedir.$name;
 $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'onlinetestdb');
    $q="insert into user (firstname,lastname,birthdate,Gender,username,password,image) values ('$fname','$lname','$bdate','$gender','$username','$password','$filedir')";
    mysqli_query($con,$q);
    mysqli_close($con);
    //echo "Registred";
    header('location:http://localhost/public_html/userlogin.php');
  ?>