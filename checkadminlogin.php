<?php session_start();
 

$connection = mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{
  $mail=$_POST['email'];
  $passbeforehash=$_POST['password'];
  $password=md5($passbeforehash);
  $sql=mysql_query("SELECT * FROM admin WHERE admin_email='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_mail= $get_value['admin_email'];
  $get_pass= $get_value['admin_passhash'];
  $get_id=$get_value['admin_id'];

          if($sql_row>0)
             {

                if(strcasecmp($get_mail,$mail)==0)
                {
                    if(strcasecmp($get_pass,$password)==0)
                      {

                            
                            header("Location:insertquestions.html");
                      }
                    else 
                    {
                            echo "password invalid";
                    }
                }
                else
                {


                    echo "email  invalid";
                    }

             }
             else{
              echo "YOU DON'T HAVE AN ACCOUNT";
             }
}
else
{

  echo "YOU DON'T HAVE AN ACCOUNT ";

}
?>
