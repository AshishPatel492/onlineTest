<?php

session_start();

 if(!isset($_SESSION['username']))

    header('location:http://localhost/public_html/adminlogin.php');

 if($_SESSION['username']!='ashish')

    header('location:http://localhost/public_html/index.html');

 //$id=$FILES['myfile']['name'];

 $img=$_FILES['file']['name'];

 $type=$_FILES['file']['type'];

 $size=$_FILES['file']['size'];

 $data=addslashes(file_get_contents($_FILES['file']['tmp_name']));

 $con=mysqli_connect('localhost','id2608124_root','pinku@ashish');

 mysqli_select_db($con,'id2608124_onlinetestdb');

 $q="insert into userimage(imagename,imagesize,imagetype,imagecontent)values('{$img}','{$type}','{$size}','{$data}')";

 $result=mysqli_query($q,$con);

  echo "Successfully inserted";

   mysqli_close($con);



header('location:http://localhost/public_html/myaccount.php');

?>