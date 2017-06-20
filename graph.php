<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php

include 'dbconfig.php';
 $lista = array();
 $dens = array();
 $cor = array();
 $i=0;
 $sql= "select u_name, score from exam_taken";
 $resultado=mysql_query($sql);
 $count=mysql_num_rows($resultado);
 if($count == 0)
 {
     echo '<h1 style="color:red;">NO DATA FOUND</h1>';
     exit();

 }
   while($row = mysql_fetch_assoc($resultado))
   {
     $name = $row['u_name'];
     $score = $row['score'];
     $lista[$i] = $name;
     $dens[$i]=$score;
     $i=$i+1;
   } 
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart() {
     var data = google.visualization.arrayToDataTable([
       ["Element", "Likes", { role: "style" } ],
         <?php 
           $k=$i;
            for ($i = 0; $i < $k; $i++) { ?>
             ['<?php echo $lista[$i] ?>',<?php echo $dens[$i] ?>,'<?php echo $cor[$i] ?>'],
             <?php } ?>
             ]);
     var view = new google.visualization.DataView(data);
     view.setColumns([0, 1,
                      { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                      2]);
     var options = {
       title: "EXAMINERS VS SCORES",
       height: 500,
       bar: {groupWidth: "30%"},
       legend: { position: "none" },
     };
     var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
     chart.draw(view, options);
 }
  $(window).resize(function(){
     drawChart();
     });
 </script>
 <html>
 <body>
  <div id="columnchart_values"></div>
 </body>
 </html>