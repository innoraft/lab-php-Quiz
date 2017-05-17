<?php
/*..............DATABASE CONNECTION AND DATABASE CREDENTIALS ...*/ 
include ('dbcredentials.php');
$db = mysql_connect($servername,$username,$password);
if (!$db) {
die("Connection failed: " . mysql_error());
}
//.......CREATE DATABASE quizdb........

$create_database = mysql_query("CREATE DATABASE ".$database_name." ;");
mysql_select_db($database_name,$db);
if($create_database == TRUE)
{
echo "DATABASE CREATED";
}
else{
	echo "error in creating db";
}
$insert_into_admin=mysql_query("INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_passhash`, `roll_id`) VALUES
(1, 'Saheb', 'soumyaraha10@yahoo.in', '900150983cd24fb0d6963f7d28e17f72', 1)");

if($insert_into_admin==TRUE)
{
	echo "inserted in admin";
}
else
{
	echo "error in inserting into admin";
}

$create_table_ans_given=mysql_query("CREATE TABLE IF NOT EXISTS `ans_given` (
  `e_id` int(100) NOT NULL,
  `q_id` int(100) NOT NULL,
  `ans_given` int(100) NOT NULL
");
if($create_table_ans_given==TRUE)
{
	echo "ansgiven table created";
}
else
{
	echo "error in creating ans_given table";
}

$create_table_categories=mysql_query("CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`c_id`)"
);
if($create_table_categories==TRUE)
{
	echo "categories table created";
}
else
{
	echo "error in creation of categories table";

}



$create_table_example=mysql_query("CREATE TABLE IF NOT EXISTS `example` (
  `q` varchar(100) NOT NULL,
  `opt1` int(100) NOT NULL,
  `opt2` int(100) NOT NULL,
  `opt3` int(100) NOT NULL,
  `opt4` int(11) NOT NULL,
  `ca` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
)");
if($create_table_example==TRUE)
{
	echo "successfully created example";
}
else{
	echo "error in creation of example table";

}





$create_table_exam_taken=mysql_query("CREATE TABLE IF NOT EXISTS `exam_taken` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `score` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`e_id`)
) ");
if($create_table_exam_taken==TRUE)
{
	echo "created table exam_taken";
}
else
{
	echo "error in creation of exam_taken table";
}

$create_table_quesans=mysql_query("CREATE TABLE IF NOT EXISTS `quesans` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q` varchar(100) NOT NULL,
  `opt1` varchar(100) DEFAULT NULL,
  `opt2` varchar(100) DEFAULT NULL,
  `opt3` varchar(100) DEFAULT NULL,
  `opt4` varchar(100) DEFAULT NULL,
  `ca` varchar(100) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`),
  KEY `c_id` (`c_id`)
) ");
if($create_table_quesans==TRUE)
{
	echo "created table quesans";
}
else
{
	echo "error in creation of quesans table";
}

$create_table_urole=mysql_query("CREATE TABLE IF NOT EXISTS `urole` (
  `u_role` varchar(20) DEFAULT NULL,
  `roll_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`roll_id`)
)");
if($create_table_urole==TRUE)
{
	echo "created table urole";
}
else
{
	echo "error in creation of urole";
}

$insert_into_urole=mysql_query("INSERT INTO `urole` (`u_role`, `roll_id`) VALUES
('admin', 1),
('user', 2)");
if($insert_into_urole==TRUE)
{
	echo "inserted into urole ";

}
else
{
	echo "failed inserting into urole";
}


$create_table_user=mysql_query("CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_passhash` varchar(50) DEFAULT NULL,
  `roll_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `roll_id` (`roll_id`)
) ");
if($create_table_user==TRUE)
{
	echo "created table user";
}
else
{
	echo "error in creation of user";
}

?>