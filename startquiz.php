<!DOCTYPE html>
<html>
<head>
<link href="css/startquiz.css" rel="stylesheet">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

  <?php
session_start();
?>
<?php
    $connection = mysql_connect("localhost", "root", "9433"); 
    $db = mysql_select_db("quizdb", $connection);
    ?>
    <?php  if(isset($_SESSION['userid']))
    {
    ?>
    <div class="container">
    <div class="idprint">
    <div class="panel panel-default">
    <?php echo "user_id".$_SESSION['userid'];?></div>
    <?php 
     }
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
   $dt=date('m/d/Y',$date);
   $name= $_SESSION['u_name'];
   $c_id=$_SESSION['category_id'];
   $querycat=mysql_query("select c_name from categories where c_id='$c_id'");
   $cat_name=mysql_fetch_assoc($querycat);
   

   $query=mysql_query(" insert into exam_taken(u_id,c_id,date,u_name,c_name) values('".$u_id."','".$fetch_id."','".$dt."','".$name."','".$cat_name['c_name']."')"); 
   
   $sql=mysql_query("select e_id from exam_taken where u_id='$u_id' and c_id='$fetch_id'"); 
   $e_id=mysql_fetch_assoc($sql);
   
   echo $e_id['e_id'];
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