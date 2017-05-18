<?php 

include('dbconfig.php');


$target_file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;



//code to import csv file into quesans table

//database connection details
// path where your CSV file is located
define('CSV_PATH',$_SERVER['DOCUMENT_ROOT'].'/');

// Name of your CSV file
$csv_file = CSV_PATH . "$target_file"; 



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
$s= mysql_query($query, $connection);
 }
    fclose($handle);
}

echo "File data successfully imported to database!!";











// Closing Connection with Server
?>
