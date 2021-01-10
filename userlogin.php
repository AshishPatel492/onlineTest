<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/manage.css" />
<script type="text/javascript" src="js/login.js"></script>
</head>
<body class="container bg-primary">
<div id="nav" class="row">
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
        <li class="nav active" role="presentation"><a href="http://localhost/public_html/userlogin.php">User Login</a></li>
        <li class="nav" role="presentation"><a href="http://localhost/public_html/registration.php">New User</a></li>
        </ul></div>
        </div></nav>
  </header>
 <div class="container" id="page-header">
  <div class="row">
  <section>
   <div class="page-header">
      <h2 class=""> Thish is Online Testing Web</h2>
	<h2 id="hello"></h2>
  </div>
    <div id="section" class="container">
    <div class="row">
    <div class="form-group">
    <article class="col-md-6">
    <h1>User Login</h1>
	<form action="http://localhost/public_html/uservalidation.php" method="post">
		  <div class="form-group">
		    <label for="forusername">User</label>
		    <input id="forusername" class="form-control" type="text" name="username" placeholder="Email Here!" />
		  </div><br />
		  <div class="form-group">
		    <label for="forpassword">Password</label>
		    <input id="forpassword" class="form-control" type="password" name="password" placeholder="Password"/>
		  </div><br />
                 <div id="errormsg"></div>
          <button type="submit" onclick="return Adminvalidate() " class="btn btn-success">Login</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
	</form></article>
  </div></div>
   </div></section></div>
    
  <div class="row">
  <footer>
        <div class="">
        <div id="footer" class="row">
         <h4>copyright &copy; Online Test 2017</h4>
        </div>
  </footer></div>
  </div>
  <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>