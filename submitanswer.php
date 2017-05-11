<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <?php session_start() ?>
  <?php
      $connection = mysql_connect("localhost", "root", "9433");
      $db = mysql_select_db("quizdb", $connection);
      ?>
<?php
$question_no= $_SESSION['ques_id'];
$_SESSION['quesopt'][$question_no]= $_POST['corrans'];
var_dump($_SESSION['quesopt']);


      header("location:javascript://history.go(-1)");
?>
