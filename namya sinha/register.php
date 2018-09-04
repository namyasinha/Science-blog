<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<style>

   body{
	    background-image:url("fff.jpg");
       }

   form{
	    text-align: center;
       }

   input{
	    border-radius: 10px;
	    padding: 10px;
	    width: 15%;
	    border-spacing:10px;
        }

   button{
	    border-color: black;
	    border-radius: 10px;
	    background-color:green;
	    color:black;
	    padding: 10px;
	     width: 15%;
         }

   .error{
   	    color:black;
        text-align:center;
        font-weight:bold;
        font-size:18px;
         }

   h1{font-size:60px;}

</style>

<head>
      <title>Register yourself</title>
</head>

<body>

	<h1><center><u>REGISTER HERE!!!</u></center></h1>
    <?php include('errors.php'); ?>
    <div id="wrapper">
	   <FORM action="register.php"method="POST">
          <div id="username_div">
    	    <span id="mess1"></span><br>
    	    <span id="mess2"></span><br>

		  <input type="text" placeholder="username"NAME="username"id="user"/></br></br>
          </div>

		      <div id="password_div">
		      <input type="password" placeholder="password"name="password_1"id="pwd" onkeyup="myFunction()"/>&nbsp; <span id="message2"style="color:black;margin-left:5px;font-weight:bold;"></span></br></br>
          </div>

          <div id="pass_confirm_div">
		      <input type="password" placeholder="confirm password"name="password_2"id="pwd1"onkeyup="myFunction()"/>&nbsp;<span id="message3"style="color:black;font-weight:bold;"></span></br></br>
          </div>

          <button id="sub" type="submit"name="reg_user">REGISTER</button>
	   </FORM> 
    </div>
  
	<h3><center><a href="index.php">LOGIN</a></center></h3>


<script src="script.js"></script>

</body>
</html>