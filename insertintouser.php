<?php
session_start();
include('dbconfig.php');
if(isset($_POST['submit']))
{ 

$name = $_POST['name'];

$email = $_POST['email'];
$pass=($_POST['password']);
$passhash=md5($pass);
$roll=2;
$sql=mysql_query("SELECT * FROM user WHERE u_email='".$email."'");
$sql_row= mysql_num_rows($sql);
$get_value= mysql_fetch_assoc($sql);
$get_mail= $get_value['u_email'];

   if($sql_row>0)
     {
          if(strcasecmp($get_mail,$email)==0)
          {
            echo"you already have one account";
            
            break;
          }
          else {
            break;
          }
      }



if($name !=''||$email !=''){

$query = mysql_query("insert into user(u_name, u_email,u_passhash,roll_id)  values ('$name','$email','$passhash','$roll')");

$querytofetchdata=mysql_query("SELECT * FROM user WHERE u_email='".$email."'");
$sq_row= mysql_num_rows($querytofetchdata);
$value= mysql_fetch_assoc($querytofetchdata);
$_SESSION['u_name']= $value['u_name'];
$_SESSION['userid']= $value['u_id'];
echo $_SESSION['u_name'];
echo $_SESSION['userid'];
$_SESSION['loggedin']=true;

header("location:quiztest.php");


}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
 
?>
