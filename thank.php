<?php
       session_start();
       include('connection.php');
       $re=$_SESSION["uname1"];
       $sql = "DELETE FROM `answer` WHERE `id`='$re' ";
       $result3=mysqli_query($conn,$sql);


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

</div>

</div>
             <h1 style="color:red; text-align: center; ">Thank You <?php echo $_SESSION["uname"]; ?> For Visiting Our Page</h1>

           



</body>
</html>
