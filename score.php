<!DOCTYPE html>
<html>
<head>
	<title></title>
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
// $e_id=$_SESSION['e_id'];
// $name=$_SESSION['u_name'];
// $quer=mysql_query("select c_name from categories where c_id='$c_id'");
// $c_name=mysql_fetch_assoc($quer);








foreach ($arrayures as $key => $value) {
	  
	 
	  $query=mysql_query("insert into ans_given(e_id,q_id,ans_given) values('".$e_id."','".$key."','".$value."')");
 

}


 ?>


<div class="align-center">
<div class="scorepart">
<?php echo "<br>";
echo "your score is ".$score;

   
   $sql=mysql_query("update exam_taken set score ='".$score."' where u_id ='$u_id' and c_id='$c_id'");




echo "<br>";
 $ansgiven=sizeof($correct_answers);
 
 session_destroy();
 ?>
</div>
</div>

</body>
</html>