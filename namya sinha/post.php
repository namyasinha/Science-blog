<?php include('connect.php') ?>
<!doctype.html>
<html>
<head>
	
	<style>

	.topnav{
		    background-color:black;
		    overflow:hidden;

	       }

/*content style in navigation bar*/
    .topnav a{
    	    float: left;
            color:yellow;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            font-family:arial,times new roman;
            margin-left:20px;
            padding-left: 30px;
             }

/*login to the left*/
    .topnav #l{float:right;}

/*change cilor of the link in hover*/
    .topnav a:hover{
	                background-color:grey;
	                color:white;


                   }

/*color of the active link*/
    .topnav a:active{
	                background-color:green;
	                color:white;
    
                    }

	header{
		   font-size:50px;
		   color:brown;
		   font-weight:bold;
	      }

	form{text-align:center;}


	
    .error{
    	   color:black;
	       font-size:19px;
	       text-align:center;
          }
	   
	</style>


<title>post</title>
</head>
<body background="fff.jpg"style="height:100%;width:100%;">

    <div class="topnav">
		<a class="active"href="profile.php">HOME</a>
        <a href="life.html">LIFE & EVOLUTION</a>
		<a href="space.html">SPACE</a>
		<a href="post.php">POST</a>
	    <a ID="l"href="logout.php">LOGOUT</a>
	</div>

	<header><center><u>Share Something New...</u></center></header>
	<?php include('errors.php'); ?>
	<form action="post.php" method="POST">

	    <textarea style="border-color: black;border-radius: 15px;border-style: solid;text-align: center;border-width:7px;"
	     name="message" id="con" rows="20" cols="40" placeholder="write here....">
	    </textarea></br></br>
	     
	    <input style="padding: 10px;background-color: green;width: 10%"type="submit"name="btn"/>
    </form>

</body>
</html>		
