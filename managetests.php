<?php

 session_start();

 if(!isset($_SESSION['username']))

    header('location:http://localhost/public_html/adminlogin.php');

 if($_SESSION['username']!='ashish')

    header('location:http://localhost/public_html/index.html');

?>

<html>

<head>

 <title>Manage Tests</title>

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

           <h1>Thish is Online Testing Web</h1><br />

          <h3 class="">Manage Tests</h3>



          <div class="container row" align="right">

          <img class=" img-rounded" src="<?php echo $row['image']; ?>" width="70px" height="70px" align="right"/>

          <br /><h2 id="hello">Hello,<?php echo $_SESSION['username']; ?></h2>

          </div>

          <nav id="subnav" class="">

          	<div class="navbar ">

              <ul class="nav nav-tabs">



		      <li role="presentation" class=""><a href="http://localhost/public_html/adminhome.php">Admin Home</a></li>

		      <li role="presentation" class="active"><a href="http://localhost/public_html/managetests.php">Manage Tests</a>

		          <li role="presentation" class=""><a href="http://localhost/public_html/createtestpaper.php">Create Test Paper</a></li>

		        <li role="presentation" class=""><a href="http://localhost/public_html/viewtestpapers.php">View Test Papers</a></li>

            <li role="presentation"><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>

		        

		       </ul>

          	</div>

          </nav>



        </div>

        <div class="container">

        <div id="section" class="row">

        	<h1>Manage Tests</h1>

          <div class="container">

           

          <div class="col-xs-6 col-md-3">

       <a  class="thumbnail" href="http://localhost/public_html/createtestpaper.php"><img class="img img-responsive" id="createquestionimage" src="images/questionsimage.jpg" width="" height="" /><h5 id="content">Create Test Paper</h5>  </a>

       </div>

       <div class="co-xs-6 col-md-3">

             <a href="http://localhost/public_html/viewtestpapers.php"><img class="img img-responsive" id="viewimage" src="images/viewimage.png" width="" height="" />

           <h5 id="content">View Tests</h5>  </a>

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

