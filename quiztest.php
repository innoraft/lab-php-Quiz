<?php session_start(); ?>
<?php
		include('dbconfig.php');
		?>
<?php echo "user_id".$_SESSION['userid']; ?>

<?php
     //choosing the categories
		$sql=mysql_query("select c_name from categories");?>


<!DOCTYPE html>
<html>
<head>
<link href="css/quiztestphp.css" rel="stylesheet">

</head>
<body>
<div class="align-center"><h1>SELECT CATEGORY</h1></div>
          <form action="startquiz.php" method="post">
		   <div class="align-center">
		    <select name="c_name" class="button">
				<?php while ($row = mysql_fetch_array($sql)) { ?>

				<option value="<?php echo $row['c_name'];?>"><?php echo $row['c_name']; ?></option>
				<?php } ?>
				</select>
				<input class="submit" name="submit" type="submit" value="SUBMIT">
				</div>
</body>
</html>

