<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "email") {
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
        echo "Invalid email";
    } else {
        echo "<span>Valid</span>";
    }
}
if ($formfield == "password") {
    if (strlen($value) < 6) {
        echo "Password too short";
    } else {
        echo "<span>Strong</span>";
    }
}
?>