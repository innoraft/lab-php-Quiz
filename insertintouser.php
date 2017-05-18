<?php
include('dbconfig.php');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
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
            // header('location:userlogin.html?msg=successful');
            break;
          }
          else {
            break;
          }
      }



if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into user(u_name, u_email,u_passhash,roll_id)  values ('$name','$email','$passhash','$roll')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header("location:youareregistered.html");


}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
