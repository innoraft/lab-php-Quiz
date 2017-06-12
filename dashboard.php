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
                <div class="navbar-header">
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="https://www.onlinegk.com/">Books</a></li>
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
    





<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


            <div class="container">
                 <div class="head">
                            DASHBOARD
                 </div>

                <div class="button">

                    
                       

                            
                            
                            <p><a target="_blank" href=""><button class="btn btn-warning">GRAPHS</button></a>
                            <a target="_blank" href="leaderboard.php"><button class="btn btn-info">Leaderboard</button></a></p>
                             <p><a target="_blank" href=""><button class="btn btn-danger">EXAM SCORES</button></a>
                            <a target="_blank" href=""><button class="btn btn-warning ">REGISTER</button></a></p>
                            

                    

                        </div>
                    </div>
             

      


<!-- <nav class="navbar navbar-inverse navbar-fixed-top" id="navbarcss">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php">DASHBOARD</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="scoreboard.php">SCORE TABLE</a></li>
      
      <li><a href="leaderboard.php">Leaderboard</a></li>
    </ul>
  </div>
</nav> -->

 
</body>
</html>