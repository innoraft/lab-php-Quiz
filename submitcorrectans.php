<?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
    ?>
<?php
$correct_ans=$_POST['corrans'];
$query=mysql_query("insert into result_sheet(ca)")
?>
