<?php

ob_start();
 
 session_start();
 
 if(isset($_SESSION['username']) and $_SESSION['state'] ==0)
{
	
	header("Location:../indexs.php");
}
 if(empty($_SESSION['username']) and  empty($_SESSION['state']))
{
	
	header("Location:../register.php");
}


 if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['logout']))
{
	unset($_SESSION['username']);
	unset($_SESSION['state']);

	header("Location:../register.php");
}
?>