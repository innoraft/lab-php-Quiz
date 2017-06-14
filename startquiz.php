<!DOCTYPE html>
<html>
<head>


  <link href="css/startquiz.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
  <link href="css/startquiz.css" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                         <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

  <?php
session_start();
?>
<?php
    include('dbconfig.php');
    ?>
    <?php  if(isset($_SESSION['userid']))
    {
    ?>
    
    
<?php
$cat=$_POST['c_name'];

$querycategory=mysql_query("select c_id from categories where c_name='".$cat."'");
$fetchcat_id= mysql_fetch_assoc($querycategory);

$fetch_id=$fetchcat_id['c_id'];
$_SESSION['category_id']=$fetch_id;
$u_id=$_SESSION['userid'];


$querycheck=mysql_query("select c_id from exam_taken where u_id='$u_id'");
$row=mysql_fetch_assoc($querycheck);
}
?>
 <div class="container">
    <div class="idprint">
    
    
<?php 
if($row['c_id']==$fetch_id)
{
  echo "you have already given this exam .Go back and choose another category";

}
else{
?>
 </div>
</div> 
<?php 

$queryques=mysql_query("select * from quesans where c_id='".$fetch_id."'");
$arrayques=array();

while($row = mysql_fetch_assoc($queryques))
   {
    $arrayques[] = $row;

   }
   shuffle($arrayques);
   $_SESSION["arrayques"]=$arrayques;
   $date=time();

  
   //$dt=date('m/d/Y',$date);
   $name=$_SESSION['u_name'];
  
   $c_id=$_SESSION['category_id'];
   $querycat=mysql_query("select c_name from categories where c_id='$c_id'");
   $cat_name=mysql_fetch_assoc($querycat);
   $u_id=$_SESSION['userid'];
   
   

   $query=mysql_query(" insert into exam_taken(u_id,c_id,date,u_name,c_name) values('".$u_id."','".$fetch_id."','".$date."','".$name."','".$cat_name['c_name']."')"); 
   
   $sql=mysql_query("select e_id from exam_taken where u_id='$u_id' and c_id='$fetch_id'"); 
   $e_id=mysql_fetch_assoc($sql);
   
   
   $SESSION['e_id']=$e_id['e_id'];

?>
<div class="container">
<div class=align-center>
<input type="button" onclick="redirect_next()" value="START QUIZ" id="btn"></div></div>
<script>
 function redirect_next()
{
    <?php $q=0; ?>
   window.location="displayques.php?q=<?php echo $q; ?>"
}
</script>
</body>
</html>
<?php } ?>