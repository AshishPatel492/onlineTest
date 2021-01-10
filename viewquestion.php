<?php
session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/public_html/adminlogin.php');
 if($_SESSION['username']!='ashish')
   header('location:http://localhost/public_html/index.html');
$con3=mysqli_connect('localhost','root');
mysqli_select_db($con3,'onlinetestdb');
$q3="select * from question";
$result3=mysqli_query($con3,$q3);
$row_count3=mysqli_num_rows($result3);
?>
<html>
<head>
 <title>View Question</title>
 <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="css/manage.css" />
 <link rel="stylesheet" type="text/css" href="css/testpaper.css" />
 <script type="text/javascript" src="js/login.js"></script>
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
          $con=mysqli_connect('localhost','root');
          mysqli_select_db($con,'onlinetestdb');
          $q="select * from user where username='".$_SESSION['username']."'";
          $result=mysqli_query($con,$q);
          $row=mysqli_fetch_array($result);
          ?>
      <div class="container">
      <div class="row">
        <div id="header" class="page-header">
           <h1>Thish is Online Testing Web</h1><br />
          <h3 class="">View Question</h3>

          <div class="container row" align="right">
          <img class=" img-rounded" src="<?php echo $row['image']; ?>" width="70px" height="70px" align="right"/>
          <br /><h2 id="hello">Hello,<?php echo $_SESSION['username']; ?></h2>
          </div>
          <nav id="subnav" class="">
          	<div class="navbar ">
              <ul class="nav nav-tabs">

		      <li role="presentation" class="nav"><a href="http://localhost/public_html/adminhome.php">Admin Home</a></li>
		      <li role="presentation" class="nav"><a href="http://localhost/public_html/managequestions.php">Manage Questions</a></li>
		          <li role="presentation" class="nav"><a href="http://localhost/public_html/createquestion.php">Create Questions</a></li>
		        <li role="presentation" class="nav active"><a href="http://localhost/public_html/viewquestion.php">View Questions</a></li>
            <li role="presentation"><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
		       </ul>
          	</div>
          </nav>

        </div>
        <div class="container">
        <div id="section" class="row">
        	<h1>View Question</h1>
          <div class="container">
             <div id="tablediv">
	  <table id="questiontable" class="col-ma-10 table table-bordered">
          <tr id="headrow" class="">
		  <th><ul class="list-inline">S.No.</ul></th>
			<th><ul class="list-inline">Question</ul></th>
			<th><ul class="list-inline">Option A</ul></th>
			<th><ul class="list-inline">Option B</ul></th>
			<th><ul class="list-inline">Option C</ul></th>
			<th><ul class="list-inline">Option D</ul></th>
			<th><ul class="list-inline">Answer</ul></th>
			<th><ul class="list-inline">Subject</ul></th>
		 </tr>
		 <?php
		  for($i=1;$i<=$row_count3;$i++)
		    {
			  $row=mysqli_fetch_array($result3);
		 ?>
         <div class="list-group">
		 <tr id="list" class="<?php if($i%2==0) echo "odd"; ?>">
		 
       <td><?php echo $row['questionid']; ?></td>
		   <td><?php echo $row['questions']; ?></td>
		   <td><?php echo $row['optionA']; ?></td>
		   <td><?php echo $row['optionB']; ?></td>
		   <td><?php echo $row['optionC']; ?></td>
		   <td><?php echo $row['optionD']; ?></td>
		   <td><?php echo $row['ans']; ?></td>
		   <td><?php echo $row['subject']; ?></td>
		   </button>
		 </tr></div>
      <?php
	    }
	  ?>
	  </table>
	
	</div>
        </div></div></div>
      </div>
        <section>
           
        </section>
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
