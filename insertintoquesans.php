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
//code to import csv file into quesans table







//database connection details




// path where your CSV file is located
define('CSV_PATH','/var/www/quiz.com/public_html/');

// Name of your CSV file
$csv_file = CSV_PATH . "quesans.csv"; 


if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }

 $col1 = $col[0];
 $col2 = $col[1];
 $col3 = $col[2];
 $col4 = $col[3];
 $col5 = $col[4];
 $col6 = $col[5];
 $col7 = $col[6];
   
// SQL Query to insert data into DataBase
$query = "INSERT INTO quesans(q,opt1,opt2,opt3,opt4,ca,c_id) VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."','".$col6."','".$col7."')";
$s     = mysql_query($query, $conn);
 }
    fclose($handle);
}

echo "File data successfully imported to database!!";









mysql_close($conn);

// Closing Connection with Server
?>
