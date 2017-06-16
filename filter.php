<?php session_start(); ?>
<?php
    include('dbconfig.php');
?>
    

<?php
   $cat=$_POST['c_name'];
$sql=mysql_query("select u_name,score from exam_taken  where c_name='$cat'  order by score DESC");

echo "<thead>
                              <tr>
                                  
                                  
                                 
                                  <th>EXAMINER_NAME</th>
                                  
                                  <th>SCORE</th>
                                  
                              </tr>
                              </thead>";?>
                              <?php 
                                  while($row=mysql_fetch_assoc($sql))
                                  {
                                   ?>
                                  
                                  <td><?php echo $row['u_name'] ?></td>
                                  
                                  <td><?php echo $row['score'] ?></td>
                                  
                              </tr>
                              <?php } ?>
   
