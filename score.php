<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
     xmlns:fb="http://ogp.me/ns/fb#" class="no-js">
<head>
	<title></title>
	<link href="classs/score.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="css/score.css" rel="stylesheet">
  <!-- <meta property="og:title" content="MY SCORE IS <?php ; ?>!"/>

<meta property="og:image" content="../images/examlogo1.png"/>

<meta property="og:site_name" content="ONLINE QUIZ"/>

<meta property="og:description" content=" How much do you think you can score? Try it for free!"/>  -->

<meta property="og:type" content="website" />
<meta property="og:title" content="WELCOME TO ONLINE QUIZ MY SCORE IS <?php echo $_SESSION['score']; ?>" />
<meta property="og:description" content="How much do you think you can score? Try it for free!" />
<meta property="og:url" content="http://quiz.sites.innoraft.com" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image" content="http://quiz.sites.innoraft.com/images/examlogo1.png" />
<meta property="og:site_name" content="ONLINE QUIZ" />
</head>
<body>


<?php session_start(); ?>
<?php
   include('dbconfig.php');
   if($_SESSION['loggedin']==true)
    {

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

   $_SESSION['score']=$score;


 ?>

</div>
</div>
<div class="container">
<div class=align-center>
<input type="button" class="btn btn-warning" onclick="redirect_next()" value="PLAY AGAIN" id="btn">
<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fquiz.sites.innoraft.com%2F&amp;src=sdkpreparse"><button class="btn btn-primary btn-lg" id="btn">SHARE ON FACEBOOK</button></a>
</div>
</div>


<!-- <div class="fb-share-button" data-href="http://quiz.sites.innoraft.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fquiz.sites.innoraft.com%2F&amp;src=sdkpreparse">Share</a></div>
 -->
<script>
 function redirect_next()
{
    <?php $q=0; ?>
   window.location="quiztest.php"
}
</script>



<?php
}
else{
  header("Location:index.html");  
}



 ?>
</body>
</html>