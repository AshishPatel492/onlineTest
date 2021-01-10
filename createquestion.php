<?php
 session_start();
 if(!isset($_SESSION['username']))
    header('location:http://localhost/public_html/adminlogin.php');
 if($_SESSION['username']!='ashish')
    header('location:http://localhost/public_html/index.html');
?>
<html>
<head>
 <title>Create Question</title>
 <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="css/manage.css" />
 <link rel="stylesheet" type="text/css" href="css/testpaper.css" />
 <script type="text/javascript" src="js/questionform.js"></script>
</head>
<body class="bg-primary">
<div class="container">
<header class="row">
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
      <div class="row">
      <div class="">
        <div id="header" class="page-header">
           <h1>Thish is Online Testing Web</h1><br />
          <h3 class="">Create Question</h3>

          <div class="container row" align="right">
          <img class=" img-rounded" src="<?php echo $row['image']; ?>" width="70px" height="70px" align="right"/>
          <br /><h2 id="hello">Hello,<?php echo $_SESSION['username']; ?></h2>
          </div>
          <nav id="subnav" class="">
          	<div class="navbar ">
              <ul class="nav nav-tabs">

		      <li role="presentation" class=""><a href="http://localhost/public_html/adminhome.php">Admin Home</a></li>
		      <li role="presentation" class=""><a href="http://localhost/public_html/managequestions.php">Manage Questions</a>
		          <li role="presentation" class="active"><a href="http://localhost/public_html/createquestion.php">Create Questions</a></li>
		        <li role="presentation" class=""><a href="http://localhost/public_html/viewquestion.php">View Questions</a></li>
            <li role="presentation"><a href="http://localhost/public_html/logout.php"><span class="glyphicon glyphicon-off"></span></a></li>
		        
		       </ul>
          	</div>
          </nav>

        </div>
        <div class="container" id="questiondiv">
        <div id="section" class="row">
        	<h1>Create Question</h1>
          <div class="" id="manage">
           		<form action="http://localhost/public_html/docreatequestion.php" method="post" class="input-group">
	  <table id="quet" cellspacing="50px" class="container">
	         <div class="col-md-4" >
                 <tr>
		   <td>Question Statment:</td>
		   <td><textarea style="width:450px;height: 50px;" class="form-control" name="question"></textarea></td>
		 </tr></div>
		 <tr>
		   <td>Option A:</td>
		   <td><textarea style="width:450px;height: 30px;" class="form-control" name="optiona"></textarea></td>
		 </tr>
		 <tr>
		   <td>Option B:</td>
		   <td><textarea style="width:450px;height: 30px;" class="form-control" name="optionb"></textarea></td>
		 </tr>
		 <tr>
		   <td>Option C:</td>
		   <td><textarea style="width:450px;height: 30px;" class="form-control" name="optionc"></textarea></td>
		 </tr>
		 <tr>
		   <td>Option D:</td>
		   <td><textarea style="width:450px;height: 30px;" class="form-control" name="optiond"></textarea></td>
		 </tr>
		 <tr>
		   <td>Correct Answer</td>
		   <td id="radio" class="input-group">
		          <input  type="radio" class="" name="answer" value="A" /> A
			  <input type="radio" name="answer" class=""  value="B" /> B
			  <input  type="radio" name="answer" class="" value="C" /> C
			  <input type="radio" name="answer" class=""  value="D" /> D
		   </td>
		 </tr>
		 <tr>
		  <td>Subject</td>
		  <td><input type="text" style="width: 450px;height: 30px;" class="form-control" name="subject" /></td>
		 </tr>
		 <tr>
		  <td></td>
		  <td><br />
		  <div id="errormsg"></div> 
		   <button type="submit" class="btn btn-success" onclick="return validateform()">Create</button>
		   <button type="reset" class="btn btn-danger">Cancel</button>
		  </td>
		 </tr>
	  </table>
	</form>
         
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