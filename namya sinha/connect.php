<?php
session_start();
$errors=array();

$e="PLEASE write somethig in the box";
$conn=mysqli_connect('localhost','root','','namya');//create connection

if(isset($_POST['btn']))
{
  $content = mysqli_real_escape_string($conn, $_POST['message']);//takes the input

   if (empty($content)) 
    { 
    array_push($errors,"$e");//insert $e to the end of array errors.
      
    }
//check if something is written in content or not.
   if (count($errors) == 0) 
    {
      $query="INSERT INTO post(content) VALUES('$content')";

      mysqli_query($conn, $query);//executes the query.
      $content=$_POST['message'];
    
      header('Location:profile.php');
     }
}
?>


