<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="classs/score.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="css/score.css" rel="stylesheet">
</head>
<body>


<?php session_start(); ?>
<?php
   include('dbconfig.php');
    ?>

<?php

if(isset($_SESSION['category_id']))
{

$sql=mysql_query("select q_id,ca from quesans where c_id='".$_SESSION['category_id']."'");

}
?>
<?php echo  "<br>";?>
<?php  $score=0;?>

 


<?php  
$correct_answers=array();
 while($row= mysql_fetch_assoc($sql))
    {
      $correct_answers[$row['q_id']]=$row['ca'];

    }
    

   $result=array_intersect($_SESSION['quesopt'],$correct_answers);


$score=sizeof($result);


?>
<?php 
$arrayures=$_SESSION['quesopt'];
$u_id=$_SESSION['userid'];
$c_id=$_SESSION['category_id'];
$e_id=$_SESSION['e_id'];
// $name=$_SESSION['u_name'];
// $quer=mysql_query("select c_name from categories where c_id='$c_id'");
// $c_name=mysql_fetch_assoc($quer);








foreach ($arrayures as $key => $value) {
	  
	 
	  $query=mysql_query("insert into ans_given(e_id,q_id,ans_given) values('".$e_id."','".$key."','".$value."')");
 

}


 ?>
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
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>

<div class="container">

<div class="scorepart ">
<?php echo "<br>";
echo "YOUR SCORE IS  ".$score;

   
   $sql=mysql_query("update exam_taken set score ='".$score."' where u_id ='$u_id' and c_id='$c_id'");




echo "<br>";
 $ansgiven=sizeof($correct_answers);
 unset($_SESSION['userid']);
  unset($_SESSION['u_id']);
 session_destroy();
 ?>

</div>
</div>
<div class="container">
<div class=align-center>
<input type="button" class="btn btn-warning" onclick="redirect_next()" value="PLAY AGAIN" id="btn"></div></div>
<script>
 function redirect_next()
{
    <?php $q=0; ?>
   window.location="quiztest.php"
}
</script>

</body>
</html>