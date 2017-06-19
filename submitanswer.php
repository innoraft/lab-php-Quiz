
 <?php session_start() ?>
  <?php
      include('dbconfig.php');
      ?>
<?php
$q=$_SESSION['valueq'];
$question_no= $_SESSION['ques_id'];
$_SESSION['quesopt'][$question_no]= $_POST['corrans'];



      //header("location:javascript://history.go(-1)");
?>
	<script>
 function redirect_next()
{

    
      window.location="displayques.php?q=<?php echo $q+1; ?>"

}
redirect_next();
</script>