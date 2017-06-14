<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link href="css/userloginform.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
<link href="css/userloginform.css" rel="stylesheet">


</head>
<body>

<?php 
session_start();

if($_SESSION['loggedin']==true)
{
    header("Location:quiztest.php");
}
else{?>



<script type="text/javascript" src="WOW-master/dist/wow.min.js"></script>

      <script type="text/javascript">

    wow = new WOW(
    {
    boxClass:'wow',
    animateClass:'animated',
    offset:100
    }
    );
    wow.init();
    </script>
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">ONLINE QUIZ
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/examlogo1.png" alt="" /></a>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        <li><a href="https://www.onlinegk.com/" target="_blank">Books</a></li>
                        <li><a href="#contact">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
<div class="container">


<!--HTML Form -->


<div class="formpart">
<form name="myForm" action="checklogin.php"   method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>LOGIN</h2>



<input class="form-control input-sm chat-input" name="email" type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="" placeholder="Email">

<input type="password"  class="form-control input-sm chat-input" name="password" autocomplete="off" placeholder="Password" >
 <?php $reasons = array("password" => "Wrong  Password","noaccount"  => "YOU DON'T HAVE AN ACCOUNT", "blank" => "You have left one or more fields blank."); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
 
<input  class="btn btn-warning" name="submit" type="submit" value="SUBMIT">






</form>

</div>

</div>
<?php }
?>
</body>
</html>
