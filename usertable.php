<!DOCTYPE html>
<html>
<head>
  <title>Leaderboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <link href="css/usertable.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css"> -->
  <link href="bootstrap-data-table-master/css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="bootstrap-data-table-master/css/styletable.css" type="text/css" rel="stylesheet">
  
</head>
<style>
  body {
  
  
   background: url(../images/testbg.jpeg) no-repeat top;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  min-height:700px;
  width: 100%;
 
  
}

</style>
<body>
<?php session_start(); ?>
<?php
    include('dbconfig.php');
    ?>



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
                        
                        <li><a href="https://www.onlinegk.com/" target="_blank">Books</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="logout.php">logout</a></li>

                    </ul>
                </div>
            </div> 
        </nav>
        

    <div class="container">
    <div class="displayhead">
    <p>USER TABLE</p>
    </div>
    </div>






<?php  



$sql=mysql_query("select u_id,u_name,u_email from user ");
?>
<div class="container">


<table class="table" id="pagination_data">
<!-- <div class="col-sm-6"> -->
                     <thead>
                              <tr>
                                  
                                  
                                 
                                  <th>EXAMINER ID</th>
                                  
                                  <th>EXAMINER</th>
                                   <th>EMAIL ID</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <?php 
                                  while($row=mysql_fetch_assoc($sql))
                                  {
                                   ?>
                                  
                                  <td><?php echo $row['u_id'] ?></td>
                                  
                                  <td><?php echo $row['u_name'] ?></td>
                                  <td><?php echo $row['u_email'] ?></td>
                              </tr>
                              <?php } ?>
                              
                              </tbody>
                        
                     

                  <!-- </div> -->
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

 

<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="bootstrap-data-table-master/js/jquery.sortelements.js" type="text/javascript"></script>
<script src="bootstrap-data-table-master/js/jquery.bdt.min.js" type="text/javascript"></script> 
<script>
    $(document).ready( function () {
        $('#pagination_data').bdt({
            showSearchForm: true,
            showEntriesPerPageField: true
        });
    });
</script>
 
 
</body>
</html>