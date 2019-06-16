<?php
      
      session_start();
    
      include('connection.php');
         $result=0;
      

           $re=$_SESSION["uname1"];
           if(!empty($_POST['quizcheck']))
           	  { 
                   $count=count($_POST['quizcheck']);
                   $result=0;
                   $i=1; 
                   $selected=$_POST['quizcheck'];
                   $q="SELECT * FROM `questionid`";
                   $query=mysqli_query($conn,$q);

                   while($rows=mysqli_fetch_array($query))
                   {
                        error_reporting(0);
                   	      $checked=$rows['answerid'] == $selected[$i];
                   	      if($checked)
                   	      {
                     	      	$result++;
                   	      }
                   	        $i++;  
                   }

             }

             

           	    else
           	    {
           	    	$count=0;
           	    	$result=0;
           	    }
      if(isset($selected))
      {
            $re=$_SESSION["uname1"];
            $q1=$selected[1];
            $q2=$selected[2];
            $q3=$selected[3];
            $q4=$selected[4];
            $q5=$selected[5];
            $q6=$selected[6];
            $q7=$selected[7];
            $q8=$selected[8];
            $q9=$selected[9];
            $q10=$selected[10];
     
           	 
        $qe="INSERT INTO `answer`(`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES ('$re','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
        $run12=mysqli_query($conn,$qe);   	          
    }
   if(isset($_POST['butn3']))
        {
              header('location:thank.php');
        }
   if(isset($_POST['butn31']))
     {
        header('location:review.php');
     }     
  $qry="INSERT INTO `marks1`(`userid`, `totalmarks`) VALUES ('$re','$result')"; 
  $run=mysqli_query($conn,$qry);
?>

<html>
<head>
	<style >
		.butn2 {
			
			background-color: #4CAF50;
			padding: 10px;
			border-color: #4CAF50;
		    float: left;

		}
		.butn21 {
			float:right;
			background-color: #4CAF50;
			padding: 10px;
			border-color: #4CAF50;

		}
		.butn1 {
			float:left;
			background-color: #4CAF50;
			padding: 16px;
			border-color: #4CAF50;
		}
		.main{
			border: 3px hidden black;
			 margin-left: 250px;
			 margin-right: 250px;
			text-align: left;

		}
		.image {
 			position:absolute;
 	 		width:1350px;
 	 		max-height:635px;
 	 		opacity: 0.3;
			z-index: -1;

		}
	 	.imge{
  			display: block;
  			margin-left: auto;
  			margin-right: auto;
		}
		h1{
			margin-left: 270px;
			color: darkblue;
			font-size: 250%;
		}

	</style>
</head>
<body >
	<div>
	<img src="d2.jpg" alt="instructions Set" class="image" > 
	</div>
	<div >
	 <marquee><img src="d6.png"></marquee>
	</div>
	<div>
		<h1>Hello <?php  echo $_SESSION["uname"]; ?></h1>
	</div>
	<center>
	<div class="main"  >
	<p>
		<img src="d8.png" class="imge" style=": center; border-bottom: 5px solid darkblue;">


<ul style="font-size:20px; color:darkblue">

<li>Total no. of questions : 10</li>

<li>Total Time for Quiz : 15 Minute(s).</li>

<li>Total question Attempt :<?php echo $count; ?></li>

<li>Total number of correct ans :<?php echo $result; ?></li>

<li>Total number of wrong ans:<?php echo $count-$result; ?></li>
<h2><li>TOTAL MARKS OBTAINED :<?php echo $result; ?></li></h2>


</ul>

<form action="result.php" method="POST">
	 <button type="submit" class="butn1" name="butn3">Logout</button>
    <button type="submit" class="butn21" name="butn31">review</button>
</form>
</p></div></center>
</body>
</html>
