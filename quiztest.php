<?php session_start(); ?>
<?php
		include('dbconfig.php');
        if($_SESSION['loggedin']==true)
{
    


		?>


<?php
     //choosing the categories
		$sql=mysql_query("select c_name from categories");
   ?>



<!DOCTYPE html>
<html>
<head>
<link href="css/quiztestphp.css" rel="stylesheet">
<link href="css/userloginform.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link href="css/quiztestphp.css" rel="stylesheet">

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
<div class="container">
<div class ="categorypart">
<h1>SELECT CATEGORY</h1>
          <form action="startquiz.php" method="post">
		  
		    <select name="c_name" class="button">
				<?php while ($row = mysql_fetch_array($sql)) { ?>

				<option value="<?php echo $row['c_name'];?>"><?php echo $row['c_name']; ?></option>
				<?php } ?>
				</select>
				<input class="submit" name="submit" type="submit" value="SUBMIT">
				
				</form>
				</div>
				</div>

<?php }
else {
    header("Location:index.html");
    } ?>


</body>
</html>

