<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">

  <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
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
                        <li><a href="logout.php">logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>

<?php session_start(); ?>
<?php
   include('dbconfig.php');
?>
    






            <div class="container">
                 <div class="head">
                            DASHBOARD
                 </div>

                <div class="button">

                    
                       

                            
                            
                            <p><a target="_blank" href="graph.php"><button class="btn btn-warning">GRAPHS</button></a>
                            <a target="_blank" href="importquestions.html"><button class="btn btn-info">INSERT QUESTIONS</button></a>
                            <a target="_blank" href="usertable.php"><button class="btn btn-info">USER TABLE</button></a>
                            <a target="_blank" href="examtaken.php"><button class="btn btn-warning ">EXAMS GIVEN</button></a></p>
                            
<?php
 $sql=mysql_query("select  u_email from user ");
 while($row= mysql_fetch_assoc($sql))
 {
  $countusers[]=$row;
 }
 $count=sizeof($countusers);

$query=mysql_query("select  e_id from exam_taken ");
 while($row= mysql_fetch_assoc($query))
 {
  $counteid[]=$row;
 }
 $counteid=sizeof($counteid);


 
 ?>
                    

                        </div>
                    </div>
            <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value"><?php echo $count ?>%USERS</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value"><?php echo $counteid ?>%EXAMS GIVEN</div>
            </div>
        </div>
    </div>
</div>
      

 
</body>
</html>