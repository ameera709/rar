<?php
include("nav.php");


if(isset($_SESSION['username']) and $_SESSION['state']==1)
header("Location:admin/panel.php");
else if (isset($_SESSION['username']) and $_SESSION['state']==0)
header("Location:indexs.php");
?>


<?php

//add user and check if existed or no
	if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['send']) )
			{
				if(empty($_POST["fname"]))
					$error["fname"]="<span class='error'></span>";
				else
				$fname=$_POST["fname"];



				if(!empty($_POST["passw"]) and strlen($_POST["passw"])<5)
			$error["passw"]="<span class= 'error'><p>Use 5 or more number / characters</p></span>";
		else
			$passw=$_POST["passw"];



			if( !empty($_POST["pas"]) and$_POST["pas"]!==$_POST["passw"])
			$error["pas"]="<span class= 'error'><p>Those passwords didn't match. Try again.</p></span>";
		else
			$pas=$_POST["pas"];



				if(!empty($fname) and !empty($passw) and !empty($email) and $_POST['passw']==$_POST['pas']  )
				{
					$sq="SELECT * FROM users";
					$qa=$con->prepare($sq);
					$qa->execute();
					$rows=$qa->fetchall();
					foreach($rows as $value)
					{
						if($value['name'] == $fname and  $value['password'] == $passw)
						{
							echo "<script> alert('SORRY YOU ARE ALREADY EXISTED')</script>";
							$good='false';
							 break;
						}
						else
						{
							$good='true';
						}
					}

				if($good=='true')
				{
	$sql="INSERT INTO users(name,Password,email,image,dataofbirth) values('$fname',md5('$passw'),'$email','$img','$birth');";


	$con->exec($sql);
    if(!$sql){
	echo"<script>alert('Not added')</script>";
	}
	else


	echo"<script>alert('Added successfully')</script>";
	header("REFRESH:0;URL=indexs.php");
				}



				}
			}





?>


<?php
//login into site if user and to panel if admin
			if ($_SERVER['REQUEST_METHOD']=="POST" and !empty($_POST['login'])) {
$logto=2;
if(empty($_POST["userlogin"]))
					$error["lname"]="<span class='error'><p>Username is incorrect </p></span>";
				else
				$uname=$_POST["userlogin"];



				if(strlen($_POST["userpassword"])<5 and empty($_POST["userpassword"]))
			$error["lpass"]="<span class= 'error'><p>The password is incorrect</p></span>";
		else
			$upass=$_POST["userpassword"];
		if(!empty($uname) and !empty($upass))
		{
			$sql="SELECT * FROM users";
			$q=$con->prepare($sql);
			$q->execute();
			$row=$q->fetchall();
			foreach($row as $value)
			{
				if($value['name']==$_POST['userlogin'] and $value['password']==md5($_POST['userpassword']) and $value['usertype']==1 )
				{
					$logto=1;
					break;
				}

					if($value['name']==$_POST['userlogin'] and $value['password']==md5($_POST['userpassword']) and $value['usertype']==0 )
				{
					$logto=0;
					break;
				}

			}
			if($logto==1)
			{

				$_SESSION['username']= $_POST['userlogin'];
				$_SESSION['state']=1;
				echo"<script>alert('You will be transferred within second')</script>";
			header("REFRESH:0;URL=admin/panel.php")	;
			}
			else if($logto==0)
			{
				echo "<script>  alert('You have signed in successfully')   </script> ";
				$_SESSION['username']= $_POST['userlogin'];
				$_SESSION['state']=0;
				header("REFRESH:0;URL=indexs.php")	;

			}
		}
		 if($logto==2)
		{
		$error["lpass"]="<span class= 'error'><p>The username or password is incorrect </p></span>";
		}


}

?>
