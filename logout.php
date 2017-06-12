<?php
session_destroy();
$_SESSION['login']=0;
header("Location:index.html");





?>