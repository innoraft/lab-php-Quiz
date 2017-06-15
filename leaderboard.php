<!DOCTYPE html>
<html>
<head>
  <title>Leaderboard</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="css/scoreboard.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css"> -->
  
</head>
<body>
<?php session_start(); ?>
<?php
    include('dbconfig.php');
    ?>

<?php
     //choosing the categories
    $sql=mysql_query("select c_name from categories");
   ?>
<div class="container">
<div class ="categorypart">
<h1>SELECT CATEGORY</h1>
          <form action="filter.php" method="post">
      
        <select name="c_name" class="button">
        <?php while ($row = mysql_fetch_array($sql)) { ?>

        <option value="<?php echo $row['c_name'];?>"><?php echo $row['c_name']; ?></option>
        <?php } ?>
        </select>
        <input class="submit" name="submit" type="submit" value="SUBMIT">
        
        </form>
        </div>
        </div>

<nav class="navbar navbar-default navbar-fixed-top">
             <div class="container"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">ONLINE QUIZ
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/examlogo1.png" alt="" /></a>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="leaderboard.php">Leaderboard</a></li>
                        <li><a href="https://www.onlinegk.com/" target="_blank">Books</a></li>
                        <li><a href="#contact">Contact Us</a></li>

                    </ul>
                </div>
            </div> 
        </nav>
        
<?php session_start(); ?>
<?php
    include('dbconfig.php');
?>
    







<?php  



$sql=mysql_query("select u_name,score from exam_taken  order by score DESC ");
?>
<div class="container">


<table class="table">
<div class="col-sm-6">
                     <thead>
                              <tr>
                                  
                                  
                                 
                                  <th>EXAMINER_NAME</th>
                                  
                                  <th>SCORE</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php 
                                  while($row=mysql_fetch_assoc($sql))
                                  {
                                   ?>
                                  
                                  <td><?php echo $row['u_name'] ?></td>
                                  
                                  <td><?php echo $row['score'] ?></td>
                                  
                              </tr>
                              <?php } ?>
                              
                              </tbody>
                        
                     

                  </div>
                  </table>
                  
                  </div>
                  <script type="text/javascript">
                    var $table = $('table'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

// Get the tbody columns width array
colWidth = $bodyCells.map(function() {
    return $(this).width();
}).get();

// Set the width of thead columns
$table.find('thead tr').children().each(function(i, v) {
    $(v).width(colWidth[i]);
});    
                  </script>

                  


  <!-- // echo "<table>
  // <tr>
  //   <td >  EXAM_ID </td>
  //   <td >  EXAMINER_ID</td>
  //   <td >  EXAMINER NAME </td>
  //   <td >  CATEGORY_ID</td>
  //   <td >  CATEGORY_NAME</td>
  //   <td >  SCORE </td>
  //   <td >  DATE</td>
  // </tr>"; -->

  
  <!-- echo "<tr>";
  echo "<td>".$row['e_id']."</td>";
  echo "<td>".$row['u_id']."</td>";
  echo "<td>".$row['u_name']."</td>";
  echo "<td>".$row['c_id']."</td>";
  echo "<td>".$row['c_name']."</td>";
  echo "<td>".$row['score']."</td>";
  echo "<td>".$row['date']."</td>";
  echo "</tr>"; -->
  <!-- }
  echo"</table>";
 ?> -->
 
 
</body>
</html>