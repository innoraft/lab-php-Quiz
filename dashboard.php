<?php session_start(); ?>
<?php
    $connection = mysql_connect("localhost", "root", "9433");
    $db = mysql_select_db("quizdb", $connection);
    


$sql=mysql_query("select * from exam_taken");


  echo "<table>
  <tr>
    <td >  e_id </td>
    <td >  u_id </td>
    <td >  u_name</td>
    <td >  c_id </td>
    <td >  score</td>
    <td >  date </td>
  </tr>";

  while($row=mysql_fetch_assoc($sql))
  {
  echo "<tr>";
  echo "<td>".$row['e_id']."</td>";
  echo "<td>".$row['u_id']."</td>";
  echo "<td>".$row['u_name']."</td>";
  echo "<td>".$row['c_id']."</td>";
  echo "<td>".$row['score']."</td>";
  echo "<td>".$row['date']."</td>";
  echo "</tr>";
  }
 ?>
