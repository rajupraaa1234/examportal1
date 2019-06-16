<?php

   session_start();
   include('connection.php');

   if(isset($_POST["butn3"]))
     {
         
         header('location:thank.php');

     }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.item1 { grid-area: header; }
.item2 { grid-area: menu; }

.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  grid-gap: 1px;
  background-color: #fff;
  padding: 5px;
}

.grid-container > div {
  background-color:white;
  text-align: left;
  padding: 5px 0;
  font-size: 25px;
}
form {
      box-sizing: border-box;
      margin-left: 2px;
      margin-right: 2px;
      padding-bottom: 10px;
      padding-left: 5px;
      padding-right: 5px;  
    }
input[type=radio]{
      margin-left: 40px;
      margin-bottom: 10px;
      margin-top: 10px;


    }
    .butn{
      padding:15px;
      background-color: lightgreen;
      margin-top: 120px;

    }
    .buton{
      padding:15px;
     
      background-color: lightgreen;
      margin-top: 120px;
      margin-left: 250px


    }
    .left{
      float: left;
    }
    .right{
      float: right;
    }
    .nbr{
      
      border:3px solid #ccc;

    }
    table{
            margin-left: 5px;
            border-collapse: collapse;
        }
        th{

        }
    .colr{
      
    
      margin-right: 10px;
      margin-bottom: 30px;
      padding: 1px;
      margin-left: 5px;
          }
    h2{
      margin-top: 2px;
      margin-left: 2px;
    }
    .main{
      margin-top: 0px;
    }
    .rdbtn{
      float: left;
    }
    .mainbody{
      min-width: 400px;
    }
</style>
</head>
<body>
<div class="grid-container">
  <div class="item1"><marquee><img src="d6.png"></marquee><br><center><img src="d3.png"></center></div>
  <div class="item2"><table style="width:10%" align="left" class="nbr">

  </table><br> <br><br>
<div class="colr"><table style="margin-left:0px; margin-right: 0px;"><tr>
  
  <!--th>3</th>
  <th>4</th-->
  </tr></table></div>
</div>
  <div class="item3  mainbody">
    <form method="post" id="sonu"  action="result.php">
          <?php
          
          $count=1;
           $i=1;
            $re=$_SESSION["uname1"];
          $query2="SELECT * FROM `answer` WHERE `id`='$re' ";
          $result2=mysqli_query($conn,$query2);
          $row2=mysqli_fetch_assoc($result2); 
          $query="SELECT * FROM `questionid` ";
          $qno=$count;
          $result=mysqli_query($conn,$query);
          error_reporting();
         if(isset($_SESSION["sel"]))
              {
                   $selected=$_SESSION["sel"];
               }    
               
          
         if(mysqli_num_rows($result)>0)
       {
             

               while($row=mysqli_fetch_assoc($result))
               {
                      echo '<div class="curque"><h5>'.$qno.' '.$row['ques'].'</h5>
                      <p ?> <span>(1)</span> <?php value="1" name="quizcheck['.$qno.']">'.$row['option1'].'
                      <p ?> <span>(2)</span> <?php value="1" name="quizcheck['.$qno.']">'.$row['option2'].'
                      <p ?> <span>(3)</span> <?php value="1" name="quizcheck['.$qno.']">'.$row['option3'].'
                      <p ?> <span>(4)</span> <?php value="1" name="quizcheck['.$qno.']">'.$row['option4'].'</div>';
?><p style="color:red ">Correct answer <span style="color:blue "> <?php echo $row['answerid'];?></span> and your selected <span style="color:blue"><?php 
    if($qno==1)
       {
          if($row2['q1']==0)
            echo 'Not Attempt';
          else
            echo $row2['q1'];     
       }
        
    if($qno==2)
       {
          if($row2['q2']==0)
            echo 'Not Attempt';
          else
            echo $row2['q2'];     
       }
    if($qno==3)
       {
          if($row2['q3']==0)
            echo 'Not Attempt';
          else
            echo $row2['q3'];     
       }
    if($qno==4)
       {
          if($row2['q4']==0)
            echo 'Not Attempt';
          else
            echo $row2['q4'];     
       }
     if($qno==5)
       {
          if($row2['q5']==0)
            echo 'Not Attempt';
          else
            echo $row2['q5'];     
       }
      if($qno==6)
       {
          if($row2['q6']==0)
            echo 'Not Attempt';
          else
            echo $row2['q6'];     
       }
       if($qno==7)
       {
          if($row2['q7']==0)
            echo 'Not Attempt';
          else
            echo $row2['q7'];     
       }
       if($qno==8)
       {
          if($row2['q8']==0)
            echo 'Not Attempt';
          else
            echo $row2['q8'];     
       }
       if($qno==9)
       {
          if($row2['q9']==0)
            echo 'Not Attempt';
          else
            echo $row2['q9'];     
       }
       if($qno==10)
       {
          if($row2['q10']==0)
            echo 'Not Attempt';
          else
            echo $row2['q10'];     
       }
      ?></span></p><?php
                      $qno++;
                      $i++;
                   }

       }
       
      
               ?>  
        
  </form>
</div>  
  <div class="item4">
  <form action="review.php" method="POST" style="float:right;">
  <input type="submit" name="butn3" value="Logout" class="butn2">
</form></h5><br><br><br><br><br><br><br>
  
</div>
  <!--div class="item5">Footer</div-->
</div>

</body>
</html>
