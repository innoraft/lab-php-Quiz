

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
session_start()
?>

  <?php
$connection = mysql_connect("localhost", "root", "9433");
$db = mysql_select_db("quizdb", $connection);
?>
  <?php $q=$_SESSION["q"];
        $arrayques=$_SESSION["arrayques"];
  ?>

        <?php
          $q=$_SESSION["q"];
          $question=$arrayques[$q]['q'];
					$option1=$arrayques[$q]['opt1'];
					$option2=$arrayques[$q]['opt2'];
					$option3=$arrayques[$q]['opt3'];
					$option4=$arrayques[$q]['opt4'];

          echo"$question";
					?>


  <input type="radio" name="corrans" value="male"><?php echo $option1 ?> <br>
  <input type="radio" name="corrans" value="female"> <?php echo $option2 ?> <br><br>
  <input type="radio" name="corrans" value="other"><?php echo $option3 ?> <br><br>
<input type="radio" name="corrans" value="other"><?php echo $option4 ?> <br>

<input type="button" onclick="redirect_next()" value="next">

</form>

<script>
function redirect_next()
{
window.location="submit.php?q=<?php echo $q+1; ?>"

}
</script>
