<?php
$conn= mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $conn);
// Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$cate=$_POST['category'];
$others="OTHERS";
	if(strcasecmp($others,$cate)==0)
     {
			 echo "others";
	     $cat=$_POST['yourTextBox'];
     }
	else
	   {
			 echo "not others";
		   $cat=$_POST['category'];
	   }

  $catquery= mysql_query("insert into categories(c_name) values('".$cat."')");
$sql=mysql_query("select c_id from categories where c_name='".$cat."'");
// $rs=mysql_query($conn,$sql);
// $row=mysql_fetch_assoc($rs);
// 	$last_id=$row;
	// if(mysqli_query($conn,$catquery))
	// {
		// $last_id = mysqli_insert_id($conn);
	// }
// }

$result = mysql_fetch_assoc($sql);
$result_cid=$result['c_id'];
$question = $_POST['question'];
$opt1 = $_POST['option1'];
$opt2=$_POST['option2'];
$opt3=$_POST['option3'];
$opt4=$_POST['option4'];
$corr_ans=$_POST['correct_answer'];

if($question !=''||$opt1 !=''||$opt2 !=''||$opt3 !=''||$opt4 !=''||$corr_ans !=''){
//Insert Query of SQL
$query = mysql_query("insert into quesans(q,opt1,opt2,opt3,opt4,ca,c_id)  values ('".$question."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$corr_ans."','".$result_cid."')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";

}
else{

echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

mysql_close($conn);

// Closing Connection with Server
?>
