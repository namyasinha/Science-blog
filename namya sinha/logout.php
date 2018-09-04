<?php
session_start();
if(session_destroy())//destroying all session
{
	header("location:index.php");//redirecting to login page
}
?>