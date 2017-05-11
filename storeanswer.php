<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
      $connection = mysql_connect("localhost", "root", "9433");
      $db = mysql_select_db("quizdb", $connection);
      ?>
      <?php
    session_start()
    ?>
    <?php
     $ans=$_POST['corrans'];
     $q=$q+1;



      ?>
</body>
</html>
