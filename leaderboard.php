<!DOCTYPE html>
<html>
<head>
  <title>Leaderboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
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
         <div class="container">
          <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="modalbtn">sort score</button>

          <!-- modal -->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">choose category</h4>
        </div>
        <div class="modal-body">

<?php
     //choosing the categories
    $sql=mysql_query("select c_name from categories");
   ?>      
           <form action="post">
          <select name="c_name" class="cname">
        <?php while ($row = mysql_fetch_array($sql)) { ?>

        <option value="<?php echo $row['c_name'];?>"><?php echo $row['c_name']; ?></option>
        <?php } ?>
        </select>
        </div>
        <div class="modal-footer">
          <input class="btn btn-warning" id="btn-content-submit" name="submit" type="submit" value="SUBMIT" data-dismiss="modal">
          
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
        

    







<?php  



$sql=mysql_query("select u_name,score from exam_taken  order by score DESC ");
?>
<div class="container">


<table class="table" id="pagination_data">
<div class="col-sm-6">
                     <thead>
                              <tr>
                                  
                                  
                                 
                                  <th>EXAMINER NAME</th>
                                  
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

                  
<script>
   $(document).ready(function(){
    $('#btn-content-submit').click(function(e){

         e.preventDefault(); //This prevents the default action of the button
         // console.log("works");
         var c_name = $('.cname').val();
         

         // console.log(c_name);
         
              $.ajax({
                   url:"filter.php",
                   type:"POST",
                   data :{
                        c_name : c_name, // The2nd c_name is the name of the input field nd the 1st c_name is the nme of the variable created above
                        
          }, // sending the value of counter and blogtag to the server
                   success:function(data){
                   $("#pagination_data").empty(); // Clearing the table contents so that the new fetched data from the filtering can be populated here.
                   // console.log(data);
                   $('#pagination_data').html(data);
                   }
              });

    });
});
</script>
 
 
</body>
</html>