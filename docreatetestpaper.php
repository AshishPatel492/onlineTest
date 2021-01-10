<?php

session_start();

if(!isset($_SESSION['username']))

   header('location:http://localhost/public_html/adminlogin.php');

if($_SESSION['username']!='ashish')

   header('location:http://localhost/public_html/index.php');

   

 $size=sizeof($_POST);

 //echo "size=".$size;

 for($j=1,$i=1;$i<=$size;$i++)

	 //ini_set('max_execution_time',0);

  {

    $index="questions".$j;

	 if(!isset($_POST[$index]))

	  {

	    $j++;

		  $i--;

        continue;

	  }

     else

       {

	     $j++;

		 $questionid[$i]=$_POST[$index];

	     //echo "questionid[".$i."]".$questionid[$i];

	   } 

  }

  /* connection */

  $con=mysqli_connect('localhost','root');

  mysqli_select_db($con,'onlinetestdb');

  

  /*query to obtain subject */

  

  $q="select subject from question where questionid=$questionid[1]";

  $result=mysqli_query($con,$q);

  $row=mysqli_fetch_array($result);

  $subject=$row['subject'];

  

  $q1="insert into test (subject) values ('$subject')";

  

  mysqli_query($con,$q1);

  

  /* obtainng generated test paper's testid */

  $q2="select max(testid) from test";

  $result2=mysqli_query($con,$q2);

  $row2=mysqli_fetch_array($result2);

  $testid=$row2[0];

  

  /* inserting records in test_question table */

  

  for($i=1;$i<=$size;$i++)

    {

	 $q3="insert into test_question (questionid,testid) values ($questionid[$i],$testid)";

	 mysqli_query($con,$q3);

	}

	

mysqli_close($con);

header('location:http://localhost/public_html/managetests.php');

?>