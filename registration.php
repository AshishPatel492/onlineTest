<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<!-- <script type="text/javascript" src="js/registration.js"></script> -->
<meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/date/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="css/manage.css" />
            
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
        <li class="nav" role="presentation"><a href="http://localhost/public_html/userlogin.php">User Login</a></li>
        <li class="nav active" role="presentation"><a href="http://localhost/public_html/registration.php">New User</a></li>
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
    <div class="col-md-6">
    <article class="">
    <h1>Registration</h1>
	<form data-toggle="validator" action="http://localhost/public_html/doregistration.php" method="POST" enctype="multipart/form-data">

                 <div class="form-group">
		           <label for="inputName" class="control-label">First Name</label>
		           <input type="text" id="inputName" class="form-control" name="firstname" placeholder="First Name" required />
                 </div><br/>
                 <div class="form-group">
		    <label for="lastname" class="control-label">Last Name</label>
		    <input id="lastname" class="form-control" type="text" name="lastname" placeholder="Last Name" required />
                 </div><br/>
                <div class="form-group" id="datepicker1">
                 <label for="datepicker" class="control-label">Birth Date</label><br/>
                 <input type="text" class="form-control" style="color:#999;" readonly value="dd-mm-yy" id="datepicker" name="birthdate" required />
                </div><br />
                    
                   <div class="form-group">
		    <label for="gender" id="gender" class="control-label">Gender</label><br/>
		    <label><input id="male" class="" type="radio" name="gender" value="male" required />Male</label>
                    <label><input id="female" class="" type="radio" name="gender" value="female" required />Female</label>
                 </div><br/>
		  <div class="form-group">
	    <label for="forusername" class="control-label">User</label>
	    <input id="forusername" class="form-control" type="email" name="username" placeholder="EmailHere!" onkeyup="" data-error="Enter Correct Email" required/><div class="help-block with-errors"></div>
  </div>
		  <div class="form-group">
		    <label for="forpassword" class="control-label">Password</label>
		    <input id="forpassword" class="form-control" type="password" name="password" placeholder="Password" required />
		   <output id="list"></output>
		  </div>
		<div class="form-group">
		  <label for="files">Profile Picture</label>
		   <input type="file" name="myfile" class="file_input" id="files" accept=".gif,.jpg,.png" />
		  </div>
		  <br /><div id="errormsg"></div>
          <div class="form-group">
          <button type="submit" id="submit" class="btn btn-success">Register</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
	</form></article>
  </div></div>
   </div></section></div>
    
  <div class="row">
 <footer>
        <div class="">
        <div id="footer" class="row">
         <h4>copyright &copy; Online Test 2017</h4>
        </div>
  </footer></div></div>
  </div>
    
      
     <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="bootstrap/components/validator/dist/validator.min.js"></script>
     <script type="text/javascript" src="bootstrap/date/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
$('#datepicker').datepicker({
    format: 'dd-mm-yyyy'
});
</script>
</body>

</html>