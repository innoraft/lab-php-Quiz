<!DOCTYPE html>
<html>
<head>
<title>REGISTER</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link href="css/userloginform.css" rel="stylesheet">

</head>
<body>
<?php
session_start();
 if($_SESSION['loggedin']==true)
{
    header("Location:quiztest.php");
}
else{
?>
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                
                <div class="navbar-header">ONLINE QUIZ
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/examlogo1.png" alt="" /></a>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        <li><a href="https://www.onlinegk.com/" target="_blank">Books</a></li>
                        <li><a href="#contact">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
<div class="container">



<div class="formpart">


<form name="myForm" action="insertintouser.php" onsubmit="return validateForm()"  method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>REGISTER</h2>

<input class="form-control input-sm chat-input" id="txt" name="name" type="text" value="" placeholder="Name" required>

<input class="form-control input-sm chat-input" id="txt" name="email" type="text"  pattern="[a-z0-9._%+-]+@[innoraft]+\.[a-z]{2,3}$" value="" placeholder="Email" required>

<input class="form-control input-sm chat-input" type="password" id="password" name="password" onkeyup="CheckPasswordStrength(this.value)" autocomplete="off" placeholder="Password" required>
<span id="password_strength"></span>
 <input class="form-control input-sm chat-input" type="password" placeholder="Confirm Password" onkeyup="check()" id="confirm_password" required>
 <span id='message'></span>
<input class="btn btn-warning" name="submit" type="submit" value="SUBMIT" >
<?php $reasons = array( "blank" => "You have left one or more fields blank."); if ($_GET["registerFailed"]) echo $reasons[$_GET["reason"]]; ?>
<script type="text/javascript">
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");

        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }

        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.

        var passed = 0;

        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }

        //Validate for length of Password.
        if (passed > 2 && password.length > 2) {
            passed++;
        }

        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
    </script>
    <!-- <script>
$.validate({
modules : 'security',});
});
</script>
 -->
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}


</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<!-- <input class="input" name="password" type="text" value=""> -->






</form>
</div>
</div>

<?php 
} 


 ?>
</body>
</html>
