<!DOCTYPE html>
<html>
<head>
  <title>Leaderboard</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
  <link href="css/scoreboard.css" rel="stylesheet">
</head>
<body>

<?php session_start(); ?>
<?php
    include('dbconfig.php');
?>
    





<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



  
<!-- <div class="container" style="margin-top:50px">
  <h3>Fixed Navbar</h3>
  <div class="row">
    <div class="col-md-4">
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
    </div>
  </div>
</div> -->

<!-- <h1>Scroll this page to see the effect</h1>
 -->



<?php  



$sql=mysql_query("select u_name,score from exam_taken  order by score DESC ");
?>
<div class="container">

<div class="panel panel-default">

<table class="table">
<div class="col-sm-6">
                          

                      <section class="panel">
                          <header class="panel-heading">
                             LEADERBOARD
                          </header>
                          <table class="table">



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
                          </table>
                      </section>

                  </div>
                  </table>
                  </div>
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