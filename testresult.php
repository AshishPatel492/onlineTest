<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhosthttp://localhost/public_html/adminlogin.php');
if($_SESSION['username']=='ashish')
	header('location:http://localhosthttp://localhost/public_html/adminhome.php');

$size=sizeof($_POST);
$size=$size/2;

for($i=1;$i<=$size;$i++)
{
	$index1="questionid".$i;
	$index2="option".$i;
	$questionid[$i]=$_POST[$index1];
	$markedoption[$i]=$_POST[$index2];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'onlinetestdb');
?>
<html>
<head>
 <title>Test Result</title>
 <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="css/manage.css" />

<link rel="stylesheet" type="text/css" href="css/testpaper.css" />
</head>
<body class="container bg-primary">
<div class="row">
<header>
      <nav class="">
      <div id="nav" class="navbar navbar">
      
      <ul class="nav nav-tabs nav-justified">

      <li role="presentation" class=""><a href="http://localhosthttp://localhost/public_html/index.html">Home</a></li>
          <li role="presentation"><a href="http://localhosthttp://localhost/public_html/adminlogin.php">Admin Login</a></li>
        <li role="presentation"><a href="http://localhosthttp://localhost/public_html/userlogin.php">User Login</a></li>
        <li role="presentation"><a href="http://localhosthttp://localhost/public_html/registration.php">New User</a></li>
        </ul>
        </div></nav>
        
  </header>
  <?php
          $con2=mysqli_connect('localhost','root');
          mysqli_select_db($con2,'onlinetestdb');
          $q2="select * from user where username='".$_SESSION['username']."'";
          $result2=mysqli_query($con2,$q2);
          $row2=mysqli_fetch_array($result2);
          ?>
      <div class="container">
      <div class="row">
        <div id="header" class="page-header">
          <h1>Thish is Online Testing Web</h1><br/>
          <h3 class="">Test Result</h3>
          <div class="container row" align="right">
          <img class=" img-rounded" src="<?php echo $row2['image']; ?>" width="70px" height="70px" align="right"/>
          <br /><h2 id="hello">Hello,<?php echo $_SESSION['username']; ?></h2>
          </div>
          <nav id="subnav" class="">
            <div class="navbar ">
              <ul class="nav nav-tabs">

          <li role="presentation" class=""><a href="http://localhost/public_html/home.php">Home</a></li>
          <li role="presentation" class=""><a href="http://localhost/public_html/myaccount.php">My Account</a></li>
          <li role="presentation" class=""><a href="http://localhost/public_html/testlist.php">List of Test Papers</a></li>
          <li role="presentation" class="active"><a href="#">Test Result</a></li>
          <li role="presentation" class=""><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
            <!--<li role="presentation"><a href="http://localhosthttp://localhost/public_html/registration.php">New User</a></li>-->
           </ul>
            </div>
          </nav>
          
        </div>
        <div class="container">
        <div id="section" class="row">
          <h1>Test Result</h1>
          <div id="" class="container">
          <div id="tablediv" class="form-group">
		  	<?php
				$right=0;
				$wrong=0;
				$notattempted=0;
				
		      for($i=1;$i<=$size;$i++)
			  {
			     $q="select * from question where questionid=$questionid[$i]";
				$result=mysqli_query($con,$q);
		 	    $row=mysqli_fetch_array($result);
				if($markedoption[$i]==$row['ans']) 
				  $right++;
				if($markedoption[$i]=="e")  
				  $notattempted++;
				if($markedoption[$i]!="e" && $markedoption[$i]!=$row['ans']) 
				 $wrong++;
		    ?>            
         <div  class="form-group">
	  <span class="queno">Que:-<?php echo "$i:"; ?></span>
	  <span class="question form-control"><?php echo $row['questions']; ?></span><br/>
	  <span class="options" style="color:
	  <?php
	     
	     if($markedoption[$i]=="A") 
	     	if($row['ans']=="A") 
	     		echo "green";
	        else
	          { 
	        	echo "red";
	        	
              }
	     else 
	     	echo "black";
	      ?>">(a)
	      <?php 
	         echo " ".$row['optionA']; 
	       ?>
	      </span><br/>
	  <span class="options" style="color:
	  <?php 
	     if($markedoption[$i]=="B")
	       if($row['ans']=="B")
	         echo "green"; 
	       else 
	       	 { 
	        	echo "red";
	        	
              } 
	     else echo "black";
	   ?>">(b)
	   <?php echo " ".$row['optionB']; 
	   ?>
	   	
	   </span><br/>
	  <span class="options" style="color:
	  <?php
	    if($markedoption[$i]=="C") 
	    	 if($row['ans']=="C") 
	    	 	echo "green"; 
	    	 else 
	    	 	{ 
	        	echo "red";
	        	
              } 
	    else 
	    	echo "black";
	    ?>">(c)
	    	 <?php 
	    	   echo " ".$row['optionC']; 
	    	  ?>
	    	  	
	    	  </span><br/>
	  <span class="options" style="color:
	  <?php 
	    if($markedoption[$i]=="D")  
	    	if($row['ans']=="D") 
	    		echo "green"; 
	    	else 
	    		{ 
	        	echo "red";	
                } 
	    else 
	    	echo "black";
	   ?>">(d)
	   <?php 
	     echo " ".$row['optionD']; 
	   ?></span><br/>
	  
	 </div>
	 <?php
	  } 
      
	  ?>
        </div>
	 <div class="col-md-4">
	  <table class="table" id="resulttable" align="center">
		  <div id="att">
			  <tr>
				  <th>Attempted</th>
				  <th><?php echo $right+$wrong; ?></th>
				</tr>
			</div>
			<div id="nota">
				<tr>
					<th>Not Attempted</th>
					<th><?php echo $notattempted; ?></th>
				</tr>
			</div>
			<div id="right">
				<tr>
					<th>Right</th>
					<th><?php echo $right; ?></th>
				</tr>
			</div>
			<div id="wrong">
				<tr>
					<th>Wrong</th>
					<th><?php echo $wrong; ?></th>
				</tr>
			</div>
	  </table>
	 </div></div></div>
      </div>
                   
      </div>
  <footer>
        <div class="">
        <div id="footer" class="row">
         <h4>copyright &copy; Online Test 2017</h4>
        </div>
  </footer></div>
  <script type="text/javascript" src="/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/bootstrap/components/validator/dist/validator.min.js"></script>
</body>
</html>