<?php
session_start();

$username = "";
$errors = array(); 
$a = mysqli_connect('localhost', 'root', '', 'namya');//creating connection

//for registration page
if (isset($_POST['reg_user'])) 
{
  $username = mysqli_real_escape_string($a, $_POST['username']);
  $password_1 = mysqli_real_escape_string($a, $_POST['password_1']);
  

  if (empty($username)) { array_push($errors, "Username is required");}
  
  
  if (empty($password_1)) { array_push($errors, "Password is required");}
   
  $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($a, $query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) //if value is fetched
  { 
    //exit 
    if ($user['username'] === $username) 
     {array_push($errors, "Username already exists");}
    
  }
  

  // save data
  if (count($errors) == 0) 
  {
   $password = md5($password_1);
   //inserting into table
   $query = "INSERT INTO users (username,password) 
             VALUES('$username','$password')";
   mysqli_query($a, $query);//execution of query

   header('location: index.php');
  }
}


//FOR LOGIN PAGE
if (isset($_POST['login_user']))
 {
   $username = mysqli_real_escape_string($a, $_POST['username']);
   $password = mysqli_real_escape_string($a, $_POST['password']);

     if (empty($username)) 
      {array_push($errors, "Username is required");}
     if (empty($password)) 
      {array_push($errors, "Password is required");}
     if (count($errors) == 0) 
     {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($a, $query);

        if (mysqli_num_rows($results) == 1) 
        {

          header('location: profile.php'); 
        }
        else 
        {array_push($errors, "Wrong username/password combination");}
      }
  }

