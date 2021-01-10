<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/public_html/adminlogin.php');
if($_SESSION['username']=='ashish')
   header('location:http://localhost/public_html/adminhome.php');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'onlinetestdb');
$q="select * from test";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>
<html>
<head>
 <title>Test List</title>
 <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="css/manage.css" />
 <link rel="stylesheet" type="text/css" href="css/testpaper.css" />
</head>
<body class="container bg-primary">
<div class="row">
<header class="container">
      <nav class="">
      <div id="nav" class="navbar navbar">
      <div class="navbar navbar-header">
        <button class="btn btn-info navbar-toggle"
         data-toggle="collapse" data-target="#menu" >
          <span class="glyphicon glyphicon-th-large"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="menu">
      <ul class="nav nav-tabs nav-justified navbar-right">
        <li class="nav " role="presentation"><a href="http://localhost/public_html/index.html">Home</a></li>
        <li class="nav " role="presentation"><a href="http://localhost/public_html/adminlogin.php">Admin Login</a></li>
        <li class="nav" role="presentation"><a href="http://localhost/public_html/userlogin.php">User Login</a></li>
        <li class="nav" role="presentation"><a href="http://localhost/public_html/registration.php">New User</a></li>
        </ul></div>
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
          <h3 class="">Test List</h3>
          <div class="container row" align="right">
          <img class=" img-rounded" src="<?php echo $row2['image']; ?>" width="70px" height="70px" align="right"/>
          <br /><h2 id="hello">Hello,<?php echo $row2['firstname'].' '.$row2['lastname']; ?></h2>
          </div>
          <nav id="subnav" class="">
          	<div class="navbar ">
          <ul class="nav nav-tabs">
		      <li role="presentation" class=""><a href="http://localhost/public_html/home.php">Home</a></li>
					<li role="presentation" class=""><a href="http://localhost/public_html/myaccount.php">My Account</a></li>
					<li role="presentation" class="active"><a href="http://localhost/public_html/testlist.php">List of Test Papers</a></li>
					<li role="presentation" class=""><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
		       </ul>
          	</div>
          </nav>
        </div>
        <div class="container">
        <div id="section" class="row">
        	<h1>Test List</h1>
          <div id="tablediv" class="container col-md-8">
 			<h2><p>Click on the to attempt the test paper</p></h2>
 			<table id="questiontable" class="table table-condensed">
 				<thead>
 				  <tr id="headrow">
 				    <th>Test ID</th>
 				    <th>Subject</th>
 				    <th>Total Questions</th>
 				  </tr>
 				</thead>
 				<tbody>
				<?php
				  for($i=1;$i<=$row_count;$i++)
				  {
					  $row=mysqli_fetch_array($result);
					  $q1="select * from test_question where testid=".$row['testid'];
					  $result1=mysqli_query($con,$q1);
					  $row_count1=mysqli_num_rows($result1);
				?>  
 					<tr class="<?php if($i%2==0) echo "odd";?>">
					<td><a href="http://localhost/public_html/testpaper.php?testid=<?php echo $row['testid']; ?>"><?php echo $row['testid']; ?></a></td>
					<td><a href="http://localhost/public_html/testpaper.php?testid=<?php echo $row['testid']; ?>"><?php echo $row['subject']; ?></a></td>
					<td><a href="http://localhost/public_html/testpaper.php?testid=<?php echo $row['testid']; ?>"><?php echo $row_count1; ?></a></td>
					</tr>	
				<?php
				  }
	     		?> 				  	
 				  </tr>
 				</tbody>
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
     <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>