<?php session_start();
 

$connection = mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $mail=$_POST['email'];
  $passbeforehash=$_POST['password'];
  $password=md5($passbeforehash);
  $sql=mysql_query("SELECT * FROM user WHERE u_email='".$mail."' and u_name='".$name."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  $get_name=$get_value['u_name'];
  $get_mail= $get_value['u_email'];
  $get_pass= $get_value['u_passhash'];
  $get_id=$get_value['u_id'];

          if($sql_row>0)
             {
                 

                if(strcasecmp($get_name,$name)==0)
                 {

                      if(strcasecmp($get_mail,$mail)==0)
                        {
                            if(strcasecmp($get_pass,$password)==0)
                              {
                                    $_SESSION['u_name']=$get_name;
                                    $_SESSION['mail']= $get_mail;
                                    
                                    $_SESSION['userid']=$get_id;

                                    header("Location:quiztest.php");
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
                         echo "invaid name";
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
