
<!doctype.html>
<html>
<head>

	<style>
	
/*navigation bar color*/
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

/*style to header*/
    header{font-size:20px;
    	   font-size:50px;
	       margin-left:400px;
	       margin-top: 30px;
	       color:brown;
	       font-weight:bold;
          }


    .columnleft{
    	   float:left;
	       width:50%;
	       padding:10px;
	       height:300px;
	       border-style: :solid;

               }
    .columnright{
    	   float:right;
	       width:50%;
	       padding:10px;
	       height:300px;
	       border-style: :solid;

                }


    .column1left{
    	   float:left;
           width:50%;
	       padding:10px;
	       height:300px;
	       border-style: :solid;

                }

    .column1right{
    	   float:right;
           width:50%;
	       padding:10px;
	       height:300px;
	       border-style: :solid;

                  }

    .column2left{
    	    float:left;
            width:50%;
	        padding:10px;
	        height:300px;
	        border-style: :solid;
	        font-size:30px;
	        font-family:arial;
	

                 }

</style>

	<title>Science Blog</title>
</head>
<body>

	<div class="topnav">
		<a class="active"href="profile.php">HOME</a>
        <a href="life.html">LIFE & EVOLUTION</a>
		<A HREF="space.html">SPACE</A>
		<a href="post.php">POST</a>
	    <a ID="l"href="logout.php">LOGOUT</a>
	</div>

    <HEADER><font face="helvetica">SOCIETY OF SCIENCE</font></HEADER>

    <img src="sc.jpg"width=100% height="60%"style="border-style:solid;"></br></br>
    <header1 style="font-size:70px;font-family:arial;margin-top:20px;margin-left:40%;text-decoration:underline;font-style: italic">Some Facts
    </header1>

    <div class="row">

	   <div class="columnleft"style="width:50%;border-style:solid;background-color:powderblue">
		<img src="pill.jpg"style="border-style:solid;"><p style ="font-size:30;font-family:arial;color:black;">Cancer drugs may help the liver recovery from painkiller overdoses.</p>
	   </div>

	   <div class="columnright"style="border-style:solid;background-color:blue">
		<img src="l.png"style="border-style:solid;"><p style="font-size:30;font-family:arial;color:black;margin-bottom:5px;">Salamanders can regrow nearly complete tails but lizards can’t</p>
	   </div>
    </div>
    <div class="row1">

	    <div class="column1left"style="border-style:solid;background-color:powderblue">
		 <img src="solar.jpg"style="border-style:solid;size:30px;"><p style="font-size:20px;font-family:arial;color:black;">
		It takes 40,000 years for the photon to travel from the core of the sun to the surface. But only 8 minutes to travel to Earth.</p>
	    </div>

	    <div class="column1right"style="border-style:solid;background-color:blue">
		 <img src="dna.jpg"style="border-style:solid;"><p style="font-size:30;font-family:arial;color:black;">If the DNA in all your cells is uncoiled, it would stretch 10 billion miles, from here to Pluto and back.</p>
	    </div>
    </div>

<div class="column2left" style="width:50%;border-style:solid;background-color:powderblue">

<?php
  $servername = "localhost";
  $username = "";
  $dbname = "";

// Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'namya');
// Check connection
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());//displays error if connection not created
  }

  $sql = "SELECT content FROM post";
  $result = mysqli_query($conn, $sql);//executes the query$sql

  if (mysqli_num_rows($result) > 0) //no of rows affected or entered in result
  {
    // output data of each row
    //Returns an associative array that corresponds to the fetched row and moves the internal data pointer ahead.
    
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo  $row["content"]."<br>";
    }
  
  }
  

   mysqli_close($conn);
?> 
</div>
</body>
</html>