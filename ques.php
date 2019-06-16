<?php
   session_start();
   include('connection.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<script src="raju.jquery"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
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
*{background-color: ;}
.grid-container > div {
  background-color:#e5e5e5;
  text-align: left;
  padding: 5px 0;
  font-size: 25px;
}
form {border: 3px solid black;
      box-sizing: border-box;
      margin-left: 2px;
      margin-right: 2px;
      padding-bottom: 10px;
      padding-left: 5px;
      padding-right: 5px;
      background-color: #ccc;  
    }
input[type=radio]{
      margin-left: 40px;
      margin-bottom: 10px;
      margin-top: 10px;


    }
    .butn{
      padding:15px;
      background-color: lightgreen;
      margin-top: 170px;

    }
    .buton{
      padding:15px;
      border-color: black;
      background-color: lightgreen;
      margin-top: 170px;
      margin-left: 250px


    }
    .left{
      float: left;
    }
    .right{
      float: right;
    }
   
    table{
            margin-left: 5px;
            border-collapse: collapse;
        }
        th{

        }
    .colr{
      
      border:1px solid black;
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
 .bak{background-color:blue; font-weight:bold; }
 

 }


</style>
</head>
<body>
<div class="grid-container">
  <div class="item1"><marquee><img src="d6.png"></marquee></div>
  <div class="item2"><table style="width:10%" align="left" class="nbr">
  <tr>
  <th><input type="button" value="1" class="nbr" id="01" style="background-color:red;color: white" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="2" class="nbr" id="02" style="background-color:red;color: white" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="3" class="nbr" id="03" style="background-color:red;color:white;" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="4" class="nbr" id="04" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="5" class="nbr" id="05" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  
  </tr>
  <tr>
  <th><input type="button" value="6" class="nbr" id="06" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="7" class="nbr" id="07" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="8" class="nbr" id="08" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="9" class="nbr" id="09" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="10"class="nbr" id="10" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <th><input type="button" value="11"class="nbr" id="11" style="color:white;background-color:red" onclick="myfunction(this.value)"></th>
  <tr>
  </table><br> <br><br>

    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

<div class="colr"><table style="margin-left:0px; margin-right: 0px;"><tr>
  <th style="background-color: #e5e5e5;color:blue; ">Attempt</th>
  </tr><tr><th style="background-color: #e5e5e5; color:red;">Not Attempt</th>
  </tr></table></div>
</div>
  <div class="item3  mainbody">
    <form method="post" id="sonu"  action="result.php" onsubmit="return confirm('Do you really want to submit ?');">
          <?php
          $count=1;
          $query="SELECT * FROM `questionid` ";
          $qno=$count;
          $result=mysqli_query($conn,$query);
         if(mysqli_num_rows($result)>0)
       {
               while($row=mysqli_fetch_assoc($result))
               {
                      echo '<div class="curque"><h5>'.$qno.' '.$row['ques'].'</h5><br>
                      <input type="radio" value="1" name="quizcheck['.$qno.']">'.$row['option1'].'<br>
                      <input type="radio" value="2" name="quizcheck['.$qno.']">'.$row['option2'].'<br>
                      <input type="radio" value="3" name="quizcheck['.$qno.']">'.$row['option3'].'<br>
                      <input type="radio" value="4" name="quizcheck['.$qno.']">'.$row['option4'].'<br></div>';
                      $qno++;
                   }

       }
      
               ?>  <input type="button" name="Prev" value="Prev" class="butn left" onclick="myfun1()">
                <input type="button" name="Next" value="Next" class="butn right" onclick="myfun()">
                <input type="submit" name="SUBMIT" value="SUBMIT" class="buton" id="sub">
        
  </form>
</div>  
  <div class="item4">
  <h6 style="float:right;"> Time left : <span id="timer">00min 00sec</span></h6><br><br><br><br><br><br>
  
</div>
  <!--div class="item5">Footer</div-->
</div>
<script>

$(document).ready(function(){

//attemped question should be yellow
$("input:radio[name='quizcheck[1]']").on("change",function(){
$("#01").css("background-color","blue");
//question1= $('input:radio[name="1"]:checked').val();


});
$("input:radio[name='quizcheck[2]']").on("change",function(){
$("#02").css("background-color","blue");
//question2= $('input:radio[name="2"]:checked').val();
 


});
$("input:radio[name='quizcheck[3]']").on("change",function(){
$("#03").css("background-color","blue");
//question3= $('input:radio[name="3"]:checked').val();

});
$("input:radio[name='quizcheck[4]']").on("change",function(){
$("#04").css("background-color","blue");
//question4= $('input:radio[name="4"]:checked').val();

});
$("input:radio[name='quizcheck[5]']").on("change",function(){
$("#05").css("background-color","blue");
//question5= $('input:radio[name="5"]:checked').val();


});
$("input:radio[name='quizcheck[6]']").on("change",function(){
$("#06").css("background-color","blue");
//question6= $('input:radio[name="6"]:checked').val();
});

$("input:radio[name='quizcheck[7]']").on("change",function(){
$("#07").css("background-color","blue");
//question7= $('input:radio[name="7"]:checked').val();
});
$("input:radio[name='quizcheck[8]']").on("change",function(){
$("#08").css("background-color","blue");
//question8= $('input:radio[name="8"]:checked').val();
});
$("input:radio[name='quizcheck[9]']").on("change",function(){
$("#09").css("background-color","blue");
//question9= $('input:radio[name="9"]:checked').val(); 
});
$("input:radio[name='quizcheck[10]']").on("change",function(){
$("#10").css("background-color","blue");
//question10= $('input:radio[name="10"]:checked').val();
//alert(question10); 
});
$("input:radio[name='quizcheck[11]']").on("change",function(){
$("#11").css("background-color","blue");
//question9= $('input:radio[name="9"]:checked').val(); 
});
});
      var que1=document.getElementsByClassName('curque');
      for(var i=0;i<que1.length;i++)
      que1[i].style.display='none';
      que1[0].style.display='block';
      var f=0; 
   
   function myfun()
   {
       
          for(var j=0;j<que1.length;j++)
          que1[j].style.display='none';
          f++;
            if(f>=11)
          {
            window.alert("Only 11 Question:");
             f=10;
          } 
 
           que1[f].style.display='block';
           console.log('running');
   } 
   function myfun1()
   {
      
      for(var j=0;j<que1.length;j++)
      que1[j].style.display='none';
      f--;
      if(f<0)
        {
          window.alert("It is First Question");
          f=0;
         }
        que1[f].style.display='block';
   }
  


   

      setInterval(function()
      {
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.open("GET","response.php",false);
          xmlhttp.send(null);
       if(xmlhttp.responseText=="23:59:59")
      {
          window.alert("Your Time Is Finish and and form has been submited successfully");
          document.getElementById('sub').click(); 
      }
      document.getElementById("timer").innerHTML=xmlhttp.responseText;

      },1000);

   



     
      function myfunction(value)
     {
         f=value;
                    f--;
          for(var j=0;j<que1.length;j++)
            que1[j].style.display='none';
            que1[f].style.display='block';

      }

</script>
</body>
</html>
