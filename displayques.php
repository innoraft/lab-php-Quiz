<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="WOW-master/css/libs/animate.css">
  <link href="css/displayques.css" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
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
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="https://www.onlinegk.com/">Books</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="logout.php">Logout</a></li>


                    </ul>
                </div>
            </div>
        </nav>
        <?php
            include('dbconfig.php');
            ?>
        <?php
      session_start()
      ?>


      <?php if(isset($_SESSION['userid']))

       { ?>
         
        <div class="container">
        <div class="session-section">
        <?php echo "user_id".$_SESSION['userid'];?> -->

      <?php } 

      if(isset($_SESSION['category_id']))

       { 

     echo "category id".$_SESSION['category_id'];

      } 

      if(isset($_SESSION['quesno']))

      { 

         $_SESSION['quesno']=$_GET['q'];

      } 

       $q=$_GET['q'];?>

      </div>
      </div>
      

        <?php
     
    $arrayques=$_SESSION["arrayques"];
     $size=sizeof($arrayques);

    if($arrayques[$q]['q']!="")
      {
          $question=$arrayques[$q]['q'];
          $query=mysql_query("select q_id from quesans where q='".$question."'");

          $get_value= mysql_fetch_assoc($query);
          $_SESSION['ques_id']=$get_value['q_id'];
          //echo "questionid-".$_SESSION['ques_id'];
					$option1=$arrayques[$q]['opt1'];
					$option2=$arrayques[$q]['opt2'];
					$option3=$arrayques[$q]['opt3'];
					$option4=$arrayques[$q]['opt4'];
         
         ?>
        
         <div class="container">
      
          <div class="list-group list-cust">
            <a class="list-group-item active">
                <?php  echo"$question";?>
            </a>
            <form action="submitanswer.php" method="post" ">
            <p><input type="radio"  name="corrans" value="1"><?php echo $option1 ?></p> 
            <P><input type="radio"  name="corrans" value="2"><?php echo $option2 ?></P>
            <p><input type="radio"  name="corrans" value="3"><?php echo $option3 ?></p>       
            <p><input type="radio"  name="corrans" value="4"><?php echo $option4 ?></p>
                 
            </div>
            </div>
      
         
        <!--  <h1><?php  //echo"$question";?></h1>
         
            <form action="submitanswer.php" method="post" id="quespanel">
            <p><input type="radio"  name="corrans" value="1"> <?php //echo $option1 ?></p> 
		        <P><input type="radio" name="corrans" value="2">  <?php //echo $option2 ?></P>
		        <p><input type="radio"  name="corrans" value="3"> <?php //echo $option3 ?></p>       
            <p><input type="radio"  name="corrans" value="4"> <?php //echo $option4 ?></p>
            </form>
            </div>
            </div> -->
           
            
            
            
          
            

           

            <div class="container">
            
            <div class="submitbtn">
             <?php if($_GET['q']== 0) 
              { ?>
                      
                      <input class="btn btn-warning" name="submit" type="submit" onclick="redirect_next()" value="SUBMIT ANSWER">
                      <input class="btn btn-warning"  type="button" onclick="redirect_next()" value="NEXT">  
                      <input class="btn btn-warning"  type="button" onclick="redirect_score()" value="END TEST" >

                <?php } 
                
                elseif ($_GET['q']== ($size-1)) {?>
                      <input class="btn btn-warning" type="button" onclick="redirect_prev()" id="prevbtn"  value="prev ">
                     
                      <input class="btn btn-warning"  name="submit" type="submit" onclick="redirect_next()" value="SUBMIT ANSWER">
                      <input  class="btn btn-warning"  type="button" onclick="redirect_score()" value="END TEST" >
               <?php }
                  else 
                  {
                    ?>
                      <input class="btn btn-warning"  type="button" onclick="redirect_prev()" id="prevbtn"  value="PREV">
                      <input class="btn btn-warning" name="submit" type="submit" onclick="redirect_next()" value="SUBMIT ANSWER">
                      <input class="btn btn-warning"  type="button" onclick="redirect_next()" value="NEXT">
                      <input class="btn btn-warning"  type="button" onclick="redirect_score()" value="END TEST" >
                </div>
                </div>
                </form>
                

                
               
                      
                 <?php  } 

      }
      else{

            header("Location:score.php");
      }?>
      
    
</form>
                     


                

                     
                     



<script>
 function redirect_next()
{
   <?php $q=$_GET['q'] ?>
   window.location="displayques.php?q=<?php echo $q+1;?> "
   
}
</script>
<script>
 function redirect_prev()
{

    <?php $q=$_GET['q'] ?>
      window.location="displayques.php?q=<?php echo $q-1; ?>"

}
</script>
<script>
 function redirect_score()
{

    
      window.location="score.php"

}
</script>
<!-- <script type="text/javascript">
var MAX_COUNTER = 100000;
var counter = null;
var counter_interval = null;

function setCookie(name,value,days) {
  var expires;
  if (days) {
      var date = new Date();
      date.setTime(date.getTime()+(days*24*60*60*1000));
      expires = "; expires="+date.toGMTString();
  }
  else {
      expires = "";
  }
  document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
          c = c.substring(1,c.length);
      }
      if (c.indexOf(nameEQ) === 0) {
          return c.substring(nameEQ.length,c.length);
      }
  }
  return null;
}

function deleteCookie(name) {
  setCookie(name,"",-1);
}

function resetCounter() {
  counter = MAX_COUNTER;
 
}

function stopCounter() {
  window.clearInterval(counter_interval);
  deleteCookie('counter');
  
}

function updateCounter() {
  var msg = '';
  if (counter > 0) {
      counter -= 1;
      msg = counter;
      setCookie('counter', counter, 1);
  }
  else {
      // msg = "Counting finished.";
      resetCounter();
       window.location="score.php";

      stopCounter();
  }
  var el = document.getElementById('counter');
  if (el) {
      el.innerHTML = msg;
  }
}

function startCounter() {
  stopCounter();
  counter_interval = window.setInterval(updateCounter, 1000);
}

function init() {
  counter = getCookie('counter');
  if (!counter) {
      resetCounter();
  }
  startCounter();
}

init();
</script>
  <div class="timer">TIME LEFT
  <div id="counter"></div>

   </div>
   </div> -->
</body>
</html>
