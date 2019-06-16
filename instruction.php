<?php
    
     session_start();
     if(isset($_POST["butn1"]))
     {
         
         header('location:logout.php');

     }
     if(isset($_POST["butn2"]))
     {
         
         header('location:timer.php');

     }
   
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style >
		.butn2 {
			float:right;
			background-color: #4CAF50;
			padding: 16px;
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
 	 		max-height:650px;
 	 		opacity: 0.5;
			z-index: -1;

		}
	 	.imge{
	 	    width: 100%;
  height: auto;
	 		position: inherit;
  			display: block;
  			margin-left: auto;
  			margin-right: auto;

		}
		h1{
			margin-left: 270px;
			color: darkblue;
			font-size: 200%;
		}

	</style>
</head>
<body >
	<div>
	<img src="d10.jpg" alt="instructions Set" class="image" > 
	</div>
	<div >
	 <marquee><img src="d6.png"></marquee>
	</div>
	
		<h1> <span></span> <?php  echo "Welcome"." ". $_SESSION["uname"]; ?> </h1>

	<center>
	<div class="main"  >
	<p>
		<img src="d7.png" class="imge" style=": center; border-bottom: 5px solid darkblue;">


<ul style="font-size:1.5vw; color:black">

<li>Total no. of questions : 10</li>

<li>Total Time for Quiz : 15 Minute(s).</li>

<li>Each questions carries 1 mark each.</li>

<li>Type of Quiz is Objective type and  Every question carries 4 option(s).</li>

<li>Note that only one option (out of the 4 options) is true.</li>

<li>You can see the timer running at the right top of the page.</li>

<li>There shall be no negative marking for a wrong attempt.</li>

<li>An unattended question shall not be valued.</li>

<li>Please wait for the instructions from the Admin before you start your quiz.</li>

</ul>
<center style="color:black;">*************************   ALL THE BEST  *************************</center><br><br>

<form action="instruction.php" method="POST">
    <input type="submit" name="butn1" value="Logout" class="butn1">
    <input type="submit" name="butn2" value="Start Test" class="butn2">
</form>
<br>
	</p></div></center>

</body>
</html>

