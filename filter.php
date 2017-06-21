<?php session_start(); ?>
<?php
    include('dbconfig.php');
?>
    

<?php
   $cat=$_POST['c_name'];
$sql=mysql_query("select u_name,score from exam_taken  where c_name='$cat'  order by score DESC");
?>
<table class="table" id="pagination_data">
<thead>
                              <tr>
                                  
                                  
                                 
                                  <th>TOP SCORERS</th>
                                  
                                  <th>SCORE</th>
                                  
                              </tr>
                              </thead>
                              <?php 
                                  while($row=mysql_fetch_assoc($sql))
                                  {
                                   ?>
                                  
                                  <td><?php echo $row['u_name'] ?></td>
                                  
                                  <td><?php echo $row['score'] ?></td>
                                  
                              </tr>
                              <?php } ?>
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
   
