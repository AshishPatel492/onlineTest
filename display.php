
<?php
session_start();
if(!isset($_SESSION['username']))
  header('location:http://localhost/online_test/adminlogin.php');
if($_SESSION['username']=='ashish')
  header('location:http://localhost/online_test/adminhome.php');

		   $id=1;
          $con2=mysqli_connect('localhost','root');
          mysqli_select_db($con2,'onlinetestdb');
          $sql="select imagecontent from userimage where imageid='$id'";
          $result1=mysqli_query($con2,$sql);
          $row1=mysqli_fetch_array($result1);
          echo $row1['imagecontent'];
          //echo $image;
          mysqli_close($con2);



		  ?>