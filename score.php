<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/score.css" rel="stylesheet">
</head>
<body>

<?php session_start(); ?>
<?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
    ?>

<?php

if(isset($_SESSION['category_id']))
{

$sql=mysql_query("select q_id,ca from quesans where c_id='".$_SESSION['category_id']."'");

}
?>
<?php echo  "<br>";?>
<?php  $score=0;?>

 


<?php  $correct_answers=array();
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
$e_id=$SESSION['e_id'];
$name= $_SESSION['u_name'];








foreach ($arrayures as $key => $value) {
	  
	 
	  $query=mysql_query("insert into ans_given(e_id,q_id,ans_given) values('".$e_id."','".$key."','".$value."')");
 

}


 ?>


<div class="align-center">
<div class="scorepart">
<?php echo "<br>";?>
<?php echo "your score is ".$score;?>
<?php 
   // 	$sql=mysql_query("insert into exam_taken(score) values('".$score."') where u_id ='$u_id' and c_id='$c_id'");
   $sql=mysql_query("update exam_taken set score ='".$score."' where u_id ='$u_id' and c_id='$c_id'");



?>
<?php echo "<br>";?>
<?php $ansgiven=sizeof($correct_answers);?>
<?php echo "total questions".$ansgiven;?>
</div>
</div>

</body>
</html>