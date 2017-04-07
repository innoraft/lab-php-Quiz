
<?php
$connection = mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{
  $mail=$_POST['email'];
  $passbeforehash=$_POST['password'];
  $password=md5($passbeforehash);
  $sql=mysql_query("SELECT * FROM user WHERE u_email='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_mail= $get_value['u_email'];
  $get_pass= $get_value['u_passhash'];




  if($sql_row>0)
   {
      if(strcasecmp($get_mail,$mail)==0)
      {
          if(strcasecmp($get_pass,$password)==0)
            {
              if($get_role_id==1)
              {
                  $_SESSION['mail']= $get_mail;
                  echo"welcome to exam";
              }
              else
              {
                   echo"Welcome to your exam page";
              }
            }
          else {
            echo "password invalid";
               }
       }
       else
          echo "email password invalid";
    }

    else
    echo "unsuccessful";

}

 ?>
