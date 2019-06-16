<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
.a {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.b {
  width: 100%;
  padding: 15px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  text-align: center;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: darkblue;
}
table{
  border-collapse: collapse;
}
table,td,th{
  border:3px solid #ccc;
}
th{
  padding:30px;
}
.tab{
  margin-left: 10px;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
<body style="margin: 0px;">

<form action="register.php" method="POST" name="form1" autocomplete="off" onsubmit="return confirm('Do you really want to submit the form?');" >
  <div class="container">
   <marquee><img src="d6.png"></marquee>
   <ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="index.php">LogIn</a></li>
  <li><a href="#contact">Registration</a></li>
  <li ><a  href="about.html">About</a></li>
</ul>
    <p><h2>Please Enter Your Detail:</h2></p>
    <hr>
     <label for="name" class="col-25"><b>Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:  </b></label>
    <input type="text" placeholder="Enter Name" name="name" class="a" required id="11"><br>
     <label for="Father's name"  class="col-25"><b>Father's Name&nbsp&nbsp&nbsp&nbsp:   </b></label>
    <input type="text" placeholder="Enter Father's Name" name="fname" class="a" required id="12"><br>
     <label for="Mother'sname"  class="col-25"><b>Mother's Name&nbsp&nbsp&nbsp:</b></label>
    <input type="text" placeholder="Enter Mother's Name" name="mname" class="a" required id="13"><br>
     <label for="dob" class="col-25" ><b>Date of Birth&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b></label>
    <input type="date" placeholder="yyyy-mm-dd" name="dob" class="a" required id="14"><br>
    <label class="col-25"><b>Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b></label>
    <input type="radio" name="rad" value="Male" id="1"> Male&nbsp
    <input type="radio" name="rad" value="Female" id="2"> Female&nbsp
    <input type="radio" name="rad" value="Other" id="3"> Other&nbsp<br><br>
    <label for="mobile no" class="col-25"><b>Mobile Number&nbsp&nbsp&nbsp:</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mob" class="a" id="mobilenumber" required ><br>
     <label for="educational detail" class="col-25"><b>Educational Detail's&nbsp:</b></label><br><br>
    <table style="height:auto;width:100%">
  <tr>
    <th>Course</th>
    <th>College & university</th> 
    <th>Percentage</th>
    <th>Year</th>
  </tr>
  <tr>
    <td> <label class="tab"><b>Matriculation</b></label></td>
    <td><input type="text"  name="mc" class="b" required ><br></td>
    <td><input type="text" name="mp" class="b" required ><br></td>
     <td><input type="text" name="my" class="b" required ><br></td>

  </tr>
  <tr>
    <td> <label class="tab"><b>Intermediate</b></label></td>
    <td><input type="text"  name="ic" class="b" id="19"><br></td>
    <td><input type="text" name="ip" class="b" id="20"><br></td>
    <td><input type="text" name="iy" class="b" id="21" ><br></td>
  </tr>
   <tr>
    <td>  <label class="tab"><b>Graduation</b></label></td>
    <td><input type="text"  name="gc" class="b" required><br></td>
    <td><input type="text" name="gp" class="b" required><br></td>
    <td><input type="text" name="gy" class="b" required><br></td>
  </tr>
  <tr>
  <td><label class="tab"><b>Other Qualifications</b></label></td>
   <td><input type="text"  name="oc" class="b" id="22"><br></td>
    <td><input type="text" name="op" class="b" id="23"><br></td>
    <td><input type="text" name="oy" class="b" id="24"><br></td>
  </tr>

</table>


    <label for="email"  class="col-25"><b>Email Id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b></label>
    <input type="email" placeholder="Enter Email Id" name="email" class="a" required><br>

    <label for="psw"  class="col-25" ><b>Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="a" required><br>

    <label for="psw-repeat"  class="col-25"><b>Confirm Password&nbsp&nbsp:</b></label>
    <input type="password" placeholder="Confirm Your  Password" name="rpassword" class="a" required><br>
        
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="regist" onclick="return func()">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
   
    <script>
        
         


          //Form validation
            function func()
               {
                            //student name validation
                             var x=document.forms['form1']['name'].value;
                            var i;
                            if(x.length==0)
                                   {
                                        alert('Please Enter student name');
                                        // document.getElementById("mass").innerHTML="** Please Enter student name";
                                         return false;
                                    }
                         
                               if(x.length<3 || x.length>20)
                                   
                                   {
                                        alert('student name Not valid');
                                         return false;
                                    }
                                
                               for(i=0;i<x.length;i++)
                               {

                                    ch=x.charAt(i);
                                    if(!(ch>='a' && ch<='z') && !(ch>='A' && ch<='Z') && !(ch==' '))
                                    {
                                        alert("Invalid Student name");
                                        return false;
                                    }
                               

                               }

                       //fathers name validation

                              var y=document.forms['form1']['fname'].value;
                              if(y.length==0)
                                   {
                                        alert('Please Enter Father name');
                                         return false;
                                    }
                                if(y.length<3 || y.length>20)
                                   {
                                         alert('Father name Not valid');
                                         return false;
                                    }

                               for(i=0;i<y.length;i++)
                               {
                                    ch1=y.charAt(i);
                                    if(!(ch1>='a' && ch1<='z') && !(ch1>='A' && ch1<='Z') && !(ch1==' '))
                                    {
                                        alert("Invalid Father name");
                                        return false;
                                    }
                               

                               }
                      // mother name validation
                           var z=document.forms['form1']['mname'].value;
                              if(z.length==0)
                                   {
                                        alert('Please Enter Mother name');
                                         return false;
                                    }
                                if(z.length<3 || z.length>20)
                                   {
                                         alert('Mother name Not valid');
                                         return false;
                                    }

                               for(i=0;i<z.length;i++)
                               {
                                    ch2=z.charAt(i);
                                    if(!(ch2>='a' && ch2<='z') && !(ch2>='A' && ch2<='Z') && !(ch2==' '))
                                    {
                                        alert("Invalid Mother name");
                                        return false;
                                    }
                               

                               }
                            var xy=document.forms['form1']['dob'].value;  
                              if(xy.length==0)
                               {
                                  alert("Please Enter DOB");
                                  return false;
                               } 


                                //Gender validation    
                             var count=0;
                               var rad1=document.getElementsByName('rad');
                                for(i=0;i<rad1.length;i++)
                                    {
                                       if((rad1[i].checked)==true)
                                          count++; 
                                          //return true;
                                      }
                                    if(count==0)
                                  {
                                      alert("please select Gender");
                                      return false;         
                                  }


                            // Mobile Number Validation
                             var xyz=document.forms['form1']['mob'].value;
                               for(i=0;i<xyz.length;i++)
                               {

                                    ch6=xyz.charAt(i);
                                     if(!(!(ch6>='a' && ch6<='z') && !(ch6>='A' && ch6<='Z') && !(ch6==' ')))
                                    {
                                        alert("Invalid Mobile Number");
                                        return false;
                                    }
                               

                               }   

                                if(xyz.length==0)
                                 {
                                    alert("Please Enter Mobile number");
                                    return false;
                                 } 
                                 if(xyz.length<10 || xyz.length>10)
                                 {
                                   alert("Please Enter ten digit Mobile number");
                                   return false;
                                 }
                                  if(xyz.charAt(0)<6)
                                {
                                    alert("Enter valid Mobile number");
                                    return false;
                                 }  
                                                         // matric vlidation
                       var yz=document.forms['form1']['mc'].value; 
                       var ch3;
                              if(yz.length==0)
                                 {
                                    alert("Please Enter College name");
                                    return false;
                                 } 
                             if(yz.length<3 || yz.length>50)
                                   
                                   {
                                        alert('College Name Not valid');
                                         return false;
                                    }
                               for(i=0;i<yz.length;i++)
                               {

                                    ch3=yz.charAt(i);
                                     if(!(ch3>='a' && ch3<='z') && !(ch3>='A' && ch3<='Z') && !(ch3==' '))
                                    {
                                        alert("Invalid College name");
                                        return false;
                                    }
                               

                               }

                        var yz1=document.forms['form1']['mp'].value;
                          for(i=0;i<yz1.length;i++)
                               {

                                    ch5=yz1.charAt(i);
                                     if(!(!(ch5>='a' && ch5<='z') && !(ch5>='A' && ch5<='Z') && !(ch5==' ')))
                                    {
                                        alert("Invalid percentage");
                                        return false;
                                    }
                               

                               }   
                          //percentage validation     

                        if(yz1.length==0)
                          {
                             alert("Please Enter your Percentage");
                             return false;

                          }      
                         if(yz1<0 || yz1>100)
                         {
                              alert("Percentage Should be lies between 0 to 100");
                                        return false;
                         }
                      var yz2=document.forms['form1']['my'].value;
                       var ch4;
                        if(yz2.length==0)
                          {
                              alert("Please Enter Year");
                                return false;    
                          }   
                           if(yz2<1900 || yz2>2019)
                         {
                              alert("Invalid Year");
                                return false;
                         }
                         for(i=0;i<yz2.length;i++)
                               {

                                    ch4=yz2.charAt(i);
                                     if(!(!(ch4>='a' && ch4<='z') && !(ch4>='A' && ch4<='Z') && !(ch4==' ')))
                                    {
                                        alert("Invalid Year");
                                        return false;
                                    }
                               

                               }   
                             // email validation                    }   
                              var e=document.forms['form1']['email'].value;                  
                               if(e.length==0)
                                 {
                                     alert("Please Enter your Email");
                                     return false;
                                 }
                                 if(e.indexOf("@")==0)
                                     {
                                         alert('please enter valid email');
                                           return false;
                                            }
                                  if(((e.charAt(e.length-4))!='.') && ((e.charAt(e.length-3))!='.'))
                                    {
                                             alert('please enter valid email');
                                             return false;
                                    }

                           // password validation 
                               var pass1=document.forms['form1']['password'].value;
                                  if(pass1.length==0)
                                  {
                                      alert("Please Enter Password");
                                      return false; 
                                  }
                                  if(pass1.length<5 || pass1.length>20 )
                                     {
                                            alert('password not exist');
                                            return false;
                                         }

                                    // conform password validation      
                                         var pass2=document.forms['form1']['rpassword'].value;
                                         if(pass2.length==0)
                                  {
                                      alert("Please Enter your Conform Password");
                                      return false; 
                                  }
                                            if(pass2.length<5 || pass2.length>20 )
                                                 {   
                                                      alert('Please enter conform password:');
                                                        return false;
               
                                                  }        
                                           if(pass1!=pass2)
                                               {
                                                  alert('please enter the same password:');
                                                  return false;
                                              }
                }

 </script>

<?php

       include('connection.php');     
       $name=$_POST['name'];  
       $fname=$_POST['fname'];
       $mname=$_POST['mname'];
       $dob=$_POST['dob'];
       $m=$_POST['rad'];
     
       $mob=$_POST['mob'];
       $mc=$_POST['mc'];
       $mp=$_POST['mp'];
       $my=$_POST['my'];
       $ic=$_POST['ic'];
       $ip=$_POST['ip'];
       $iy=$_POST['iy'];
       if(isset($_POST['gc']))
       {
         $gc=$_POST['gc'];
       }
       if(isset($_POST['gp']))
       {
         $gp=$_POST['gp'];
       }
       if(isset($_POST['gy']))
       {
         $gy=$_POST['gy'];
       }
       $oc=$_POST['oc'];
       $op=$_POST['op'];
       $oy=$_POST['oy'];
         
                  error_reporting(0);
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  $qry4="SELECT * FROM `student` WHERE `login`='$email'";
                  $run4=mysqli_query($conn,$qry4);
                  $row4=mysqli_num_rows($run4); 
                  if($row4>=1)
                  {
                      ?>
                        <script>
                        alert('This Email Id Already Registered');
                         window.open('register.php','_self');

                        </script>
                     <?php
                  } 


           
      else
      {

           $qry="INSERT INTO `student`(`name`, `fname`, `mname`, `dob`, `gender`, `mob`, `mc`, `mp`, `my`, `ic`, `ip`, `iy`, `gc`, `gp`, `gy`, `oc`, `op`, `oy`,`login`, `password`) VALUES ('$name','$fname','$mname','$dob','$m','$mob','$mc','$mp','$my','$ic','$ip','$iy','$gc','$gp','$gy','$oc','$op','$oy','$email','$password')"; 
            $run=mysqli_query($conn,$qry);

        }   


     if(isset($_POST['regist']))
  {
      header("location:confirmation.php");
  }   

     
?>
