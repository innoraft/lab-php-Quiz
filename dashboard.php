<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
  <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>

<?php session_start(); ?>
<?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
?>
    





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DASHBOARD</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="scoreboard.php">SCORE TABLE</a></li>
      <li><a href="insertquestions.html">INSERT QUESTIONS</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

 
</body>
</html>