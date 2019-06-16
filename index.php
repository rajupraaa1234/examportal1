<?php

  $name= "online-exmax";
  $content= "exam";
  $expiry= time()+(60*60*24);
  setcookie($name,$content,$expiry);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;

    min-height: 685px;    
 }
form {border: 3px hidden #f1f1f1;
  
}

input[type=text], input[type=password] {
  min-width: 40%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #000;
  box-sizing: border-box;
}
.image {
  position:absolute;
  width:1280px;
  max-height:700px;
  opacity: 1.0;

  z-index: -1;

}
input[type=checkbox]{
  
  margin-left:100px;
  }
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 10px;
  margin: 1px 8px;
  border: none;
  cursor: pointer;
  min-width: 10%;
  text-align: center;
}
.marginn{
  margin-left:100px;
}
.margi{
  margin-left:25px;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  margin:8px 8px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 30px;
}
.contain {
  position:relative;
}

span.psw {
  margin: 35px;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #4CAF50;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body><!--background="d.jpg"; background-repeat: no-repeat; width: 100%";-->

<div class="contain">
<img src="login.jpg" alt="online examination" class="image">
<div>
<marquee><img src="d6.png"></marquee>
<ul>
 <li><a href="home.html">Home</a></li>
  <li><a href="index.php">LogIn</a></li>
  <li><a href="register.php">Registration</a></li>
  <li ><a href="about.html">About</a></li>
</ul>
<form action="index.php" class="frm" method="POST">
  <div class="imgcontainer">
   
  </div>
   <label for="login" ><h1 style="margin-bottom:5px;margin-left:50px;color: white;">Login Form</h1></label>  
  <div class="container">
    <label for="uname" style="color: white;"><b>Username&nbsp:&nbsp</b></label>
    <input type="text" placeholder="Enter Username" name="name" ><br>

    <label for="psw" style="color: white;"><b>Password&nbsp:&nbsp</b></label>
    <input type="password" placeholder="Enter Password" name="password"><br>
    <button type="submit" class="marginn" name="signin">Sign In</button>
    <button type="submit" class="margi" name="signup">Sign Up</button><br>
    <label style="color: white;">
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <label style="color: white;">
      <a href="forget.php" name="Forget" style="margin-left:20px; color: blue"> Forget password</a>
    </label>
</form>
</div>
</div>

</body>
</html>
<?php
    

   if(isset($_POST['signin']))
   {
       
       include('connection.php');
       $name=$_POST['name'];
       $password=$_POST['password'];
       if($name==FALSE)
       {
           ?>
             <script>
              alert('Plaese Enter Username and Password');
               window.open('index.php','_self');
             </script>
            <?php

       }
       error_reporting(0);
        $qry="SELECT  * FROM `student` WHERE `login`='$name' AND `password`='$password' ";
        $run=mysqli_query($conn,$qry);
        $row=mysqli_num_rows($run); 
        $r="SELECT * FROM `marks1` WHERE `userid` = '$name' ";
        error_reporting(0);
         $run1=mysqli_query($conn,$r);
         $row3=mysqli_num_rows($run1);

        /* if($row3>=1)
         {
            ?>
             <!--script>
               alert('You cannot give exam more than one');
                 window.open('login.php','_self');
               </script!-->
               <?php   
   
         }
    else
      { */
          if($row <1)
           {
              ?>
             <script>
              alert('Username or password not correct');
               window.open('index.php','_self');
             </script>
            <?php
          }      
       
         else
              {
                    session_start();
                    $data=mysqli_fetch_assoc($run);
                    $_SESSION["uname"]=$data['name'];
                    $_SESSION["uname1"]=$name;
                    header('location:instruction.php');
              }

      
     
}  
  if(isset($_POST['signup']))
  {
      header("location:register.php");
  }   
  


?>
