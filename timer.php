<?php
session_start();
include('connection.php');
$query="select * from time";
$res=mysqli_query($conn,$query);
$duration="";
while($row=mysqli_fetch_array($res))
{
	$duration=$row["duration"];
}
date_default_timezone_set("Asia/kolkata");
$_SESSION['duration']=$duration;
$_SESSION['start_time']=date("Y-m-d H:i:s");

$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));
$_SESSION["end_time"]=$end_time;

?>


<script type="text/javascript">
	 window.location="ques.php";
</script>
