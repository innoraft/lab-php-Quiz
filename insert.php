<?php
$connection = mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$pass=($_POST['password']);
$passhash=md5($pass);
$roll=2;


if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into user(u_name, u_email,u_passhash,roll_id)  values ('$name','$email','$passhash','$roll')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>