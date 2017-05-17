<?php
    include("dbcredentials.php");
    
    $connection = mysql_connect($servername,$username,$password);
    $db = mysql_select_db("quizdb", $connection);
    ?>
