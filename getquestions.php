<?php

 session_start();

 if(!isset($_SESSION['username']))

    header('location:http://localhost/public_html/adminlogin.php');

 if($_SESSION['username']!='ashish')

    header('location:http://localhost/public_html/index.html');

 htmlspecialchars($_POST['subject']);

 $subject=trim($_POST['subject']);

 

 $con=mysqli_connect('localhost','root');

 mysqli_select_db($con,'onlinetestdb');

 $q="select * from question where subject='$subject'";

 $result=mysqli_query($con,$q);

 mysqli_close($con);

 $row_count=mysqli_num_rows($result);

?>

<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

</head>

<body>

  <table id="testformtable" class="table">

  <div class="container">

  <div class="row">

  <?php

    for($i=1;$i<=$row_count;$i++)

	 {

	   $row=mysqli_fetch_array($result);

	   echo "<tr><td><input type='checkbox' class='checkboxes' value='";

	   echo $row['questionid'];

	   echo " ' name='questions";

	   echo $i;

	   echo "'/>";

	   echo"</td><td>";

	   echo $row['questionid'];

	   echo "</td><td>";

	   echo $row['questions'];

	   echo "</td></label></tr>";

	 }

   echo "<tr><td></td><td><br/><button class='btn btn-success' type='submit' onclick='return validateform()'>Create</button</td></tr>";

  ?></div>

  </div>

<table>

</body>

</html>

