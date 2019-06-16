<?php
  session_start();
  date_default_timezone_set("Asia/kolkata");
  $from_time=date('Y-m-d H:i:s');
  $to_time=$_SESSION["end_time"];


  $timefirst=strtotime($from_time);
  $timesecond=strtotime($to_time);
  $differenceinseconds=$timesecond-$timefirst;
  // echo $from_time." ";
  // echo $to_time." ";
  if($differenceinseconds==0)
    echo "<script type='text/javascript'>
          
           
            alert('time up');
           
           </script>";
  echo gmdate("H:i:s",$differenceinseconds);
  
  ?>