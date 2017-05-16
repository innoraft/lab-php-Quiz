<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <?php session_start() ?>
  <?php
      include('dbconfig.php');
      ?>
<?php
$question_no= $_SESSION['ques_id'];
$_SESSION['quesopt'][$question_no]= $_POST['corrans'];
var_dump($_SESSION['quesopt']);


      header("location:javascript://history.go(-1)");
?>
