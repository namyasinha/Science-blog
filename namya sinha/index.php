<?php include('server.php') ?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
	<style>

	h1{
		text-align:center;
		font-size:60px;
		font-family:sans-serif;

	  }
	body{font-family: Arial, Helvetica;
		background-image:url("fff.jpg");
		


		
	    }
	form{text-align:center;}

         
	input{border-radius:10px;
		  border-color:maroon;
		  padding:10px;
		  width:15%;
		  border-spacing:10px;
	    }

	button{padding:10px;
		   border-radius:10px;
		   width: 15%;
		   border-color:maroon;
		   background-color:green;
		   color: black;
	       }


    .error{color:black;
           text-align:center;
           font-weight:bold;
           font-size:18px;
          }

</style>


<TITLE>LOGIN HERE!!!</TITLE>
</HEAD>
<BODY>

	<h1><u>LOGIN</u></h1>
	<?php include('errors.php'); ?>
	<form action="index.php" method="POST">
		<LABEL>USERNAME</LABEL></BR>
		<input type="text" name="username" id="user" PLACEHOLDER="Enter Username"/></br></br>
        <LABEL>PASSWORD</LABEL></BR>
		<input type="password" name="password" id="pass" placeholder="Enter Password"/></br></br></br>
		
        <button type="submit" name="login_user" value="login">LOGIN</button>
         
    
	</form></BR>
	<CENTER><a href="register.php">CREATE ACCOUNT</a></CENTER>




</BODY>
</HTML>
