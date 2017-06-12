<?php session_start();
 

include('dbconfig.php');
if(isset($_POST['submit']))
{
   if ($_POST['email'] == "" || $_POST['password'] == "" )
    {
        die(header("location:registereduserlogin.php?loginFailed=true&reason=blank"));
    } 
    else {
        
    
 
  $mail=$_POST['email'];
  $passbeforehash=$_POST['password'];
  $password=md5($passbeforehash);
  $sql=mysql_query("SELECT * FROM user WHERE u_email='".$mail."'");
  $sql_row= mysql_num_rows($sql);
  $get_value= mysql_fetch_assoc($sql);
  
  $get_mail= $get_value['u_email'];
  $get_pass= $get_value['u_passhash'];
  $get_id=$get_value['u_id'];
  $_SESSION['u_name']=$get_value['u_name'];

  //checking the roll_id from database whether the person is admin or not
  $query=mysql_query("select roll_id from user where u_email='$get_mail'");
  $id=mysql_fetch_assoc($query);
  $role_id=$id['roll_id'];
  $querytocheckadmin=mysql_query("select u_role from urole where roll_id='$role_id'");
  $userrole=mysql_fetch_assoc($querytocheckadmin);


          if($sql_row>0)
             {
                 

               
                 

                      if(strcasecmp($get_mail,$mail)==0)
                        {
                            if(strcasecmp($get_pass,$password)==0)
                              {
                                    
                                    $_SESSION['mail']= $get_mail;
                                    
                                    $_SESSION['userid']=$get_id;
                                    if($userrole['u_role']=='admin')
                                    {
                                      $_SESSION['login']=1;
                                      $_SESSION['rollid']=$id['roll_id'];
                                      header("Location:dashboard.php");
                                    }
                                    else{
                                      $_SESSION['login']=1;
                                      $_SESSION['rollid']=$id['roll_id'];
                                      header("Location:quiztest.php");
                                    }

                                    
                              }
                            else 
                              {
                                    die(header("location:registereduserlogin.php?loginFailed=true&reason=password"));
                              }
                        }
                        else
                        {


                            die(header("location:registereduserlogin.php?loginFailed=true&reason=email"));
                        }

                   
                 
             }
            
             else{
                   echo "YOU DON'T HAVE AN ACCOUNT";
                 }
}
}
else
{

  echo "YOU DON'T HAVE AN ACCOUNT ";

}
?>
