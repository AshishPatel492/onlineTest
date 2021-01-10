<?php

 session_start();

 if(!isset($_SESSION['username']))

   header('location:http://localhost/public_html/adminlogin.php');

if($_SESSION['username']=='ashish')

   header('location:http://localhost/public_html/adminhome.php');

$testid=$_GET['testid'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'onlinetestdb');

$q="select * from test_question where testid=$testid";

$result=mysqli_query($con,$q);

$row_count=mysqli_num_rows($result);

?>

<html>

<head>

 <title>Test Paper</title>

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

          <h3 class="">Test Paper</h3>

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

          <li role="presentation" class="active"><a href="http://localhost/public_html/testpaper.php">Test Papers</a></li>

          <li role="presentation" class=""><a href="http://localhost/public_html//logout.php"><span class="glyphicon glyphicon-off"></span></a></li>

           </ul>

            </div>

          </nav>

          

        </div>

        <div class="container">

        <div id="section" class="row">

          <h1>Test Paper</h1>

          <div id="" class="container">

          <div id="tablediv" class="form-group">

            <form data-toggle="validator" action="testresult.php" method="post">

            <?php

              for($i=1;$i<=$row_count;$i++)

              {

                  $row=mysqli_fetch_array($result);

                  $questionid=$row['questionid'];

                  $q1="select * from question where questionid=$questionid";

                  $result1=mysqli_query($con,$q1);

                  $row1=mysqli_fetch_array($result1);



            ?>

        <div class="questiondiv">



          <input type="hidden" class="form form-control" name="questionid<?php echo $i; ?>" value="<?php echo $row1['questionid'];?>"/>

          <span class="queno">Question<?php echo "$i:"; ?></span>

          <span class="question form-control"><?php echo $row1['questions']; ?></span><br/>
          <div class="">
          <input class="option" id="a" type="radio" name="option<?php echo $i; ?>" value="A" required />
          <label for="a" class="control-label">
           <span class="options">(A)<?php echo " ".$row1['optionA']; ?></span><br/>
          </label>
          </div>
          <div class="">
          <input class="option" id="b" type="radio" name="option<?php echo $i; ?>" value="B" required/>
           <label for="b" class="control-label">
           <span class="options">(B)<?php echo " ".$row1['optionB']; ?></span><br/>
           </label></div>
           <div class="">
          <input class="option" id="c" type="radio" name="option<?php echo $i; ?>" value="C" required/>
           <label for="c" class="control-label">
           <span class="options">(C)<?php echo " ".$row1['optionC']; ?></span><br/>
             </label></div>
            <div class="">
          <input class="option" id="d" type="radio" name="option<?php echo $i; ?>" value="D" required/>
           <label for="d" class="control-label">
           <span class="options">(D)<?php echo " ".$row1['optionD']; ?></span><br/>
            </label></div>
            <div class="">
          <input class="option" id="e" chacked type="radio" name="option<?php echo $i; ?>" value="e" required/>
            <label for="e" class="control-label">
           <span class="options">(E) I do not know the answer </span><br/>
            </label></div>
        </div><br/>

        <?php

         }

         ?>
         <div class="form-control">
         <button class="btn btn-success" type="submit">Submit</button>
         </div>
          </div>
          </form>  
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
  <script type="text/javascript" src="bootstrap/components/validator/dist/validator.min.js"></script>

</body>

</html>



