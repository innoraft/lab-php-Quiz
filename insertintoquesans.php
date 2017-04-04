<?php
$connection = mysql_connect("localhost", "root", "9433"); // Establishing Connection with Server
$db = mysql_select_db("quizdb", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$cat = $_POST['category'];

	$query=mysql_query("insert into categories(c_name)  values ('$cat')");

$question = $_POST['question'];
$opt1 = $_POST['option1'];
$opt2=($_POST['option2']);
$opt3=($_POST['option3']);
$opt4=($_POST['option4']);
$correct_ans=($_POST['correct_ans']);
$sql=mysql_query("select c_id from categories where c_name='$cat'");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $c_id=$result;
    }
} else {
    echo "0 results";
}



if($question !=''||$opt1 !=''||$opt1 !=''||$opt2 !=''||$opt3 !=''||$opt4 !=''||$correct_ans !=''){
//Insert Query of SQL
$query = mysql_query("insert into quesans(q,opt1,opt2,opt3,opt4,ca,c_id)  values ('$question','$opt1','$opt2','$opt3','$opt4','$correct_ans',$c_id)");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

mysql_close($connection); // Closing Connection with Server
?>
