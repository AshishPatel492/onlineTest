<?php
session_start();
session_cache_expire(10);
if(!isset($_SESSION['username']))
  header('location:http://localhost/public_html/adminlogin.php');
if($_SESSION['username']=='ashish')
  header('location:http://localhost/public_html/adminhome.php');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'onlinetestdb');
$q="select * from user where username='".$_SESSION['username']."'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
?>
<html>
<head>
 <title>User Home</title>
 <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="css/manage.css" />
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
        <li class="nav" role="presentation"><a href="http://localhost/public_html/adminlogin.php">Admin Login</a></li>
        <li class="nav" role="presentation"><a href="http://localhost/public_html/userlogin.php">User Login</a></li>
        <li class="nav" role="presentation"><a href="http://localhost/public_html/registration.php">New User</a></li>
        </ul></div>
        </div></nav>
  </header>
  <?php
          $con=mysqli_connect('localhost','root');
          mysqli_select_db($con,'onlinetestdb');
          $q="select * from user where username='".$_SESSION['username']."'";
          $result=mysqli_query($con,$q);
          $row=mysqli_fetch_array($result);
          ?>
      <div class="container">
      <div class="row">
        <div id="header" class="page-header">
          <h1>Thish is Online Testing Web</h1><br/>
          <h3 class="">User Home</h3>
          <div class="container row" align="right">
          <img class=" img-rounded" src="<?php echo $row['image']; ?>" width="70px" height="70px" align="right"/>
          <br /><h2 id="hello">Hello,<?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
          </div>
          <nav id="subnav" class="">
          	<div class="navbar ">
              <ul class="nav nav-tabs">

		      <li role="presentation" class="active"><a href="http://localhost/public_html/home.php">Home</a></li>
					<li role="presentation" class=""><a href="http://localhost/public_html/myaccount.php">My Account</a></li>
					<li role="presentation" class=""><a href="http://localhost/public_html/testlist.php">List of Test Papers</a></li>
					<li role="presentation" class=""><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
		       </ul>
          	</div>
          </nav>
          
        </div>
        <div class="container">
        <div id="section" class="row">
        	<h1>User Home</h1>
          <div class="container">
           
           <div class="co-xs-6 col-md-3">
             <a class="thumbnail" href="http://localhost/public_html/myaccount.php"><img class="img img-responsive" id="myaccountimage" src="<?php echo $row['image']; ?>" width="" height="" />
           <h5 id="content">My Account</h5>  </a>
          </div>
          
        
          <div class="col-xs-6 col-md-3">
       <a  class="thumbnail" href="http://localhost/public_html/testlist.php"><img class="img img-responsive" id="testpaperslistimage" src="images/testpaperslistimage.jpg" width="" height="" /><h5 id="content">Test List</h5>  </a>
       </a></div>
		   

        </div></div></div>
      </div>
                   
      </div>
      <div class="row">
  <footer>
        <div class="">
        <div id="footer" class="row">
         <h4>copyright &copy; Online Test 2017</h4>
        </div>
  </footer></div></div>
       <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>