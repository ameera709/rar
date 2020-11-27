<?php
require_once('admin/dbs/db.php');
include('admin/validation.php');
?>

<html>
	<head>
	<style>
span.error p{
			color:white;
		}
label,h2{
	text-align:700px;
	color:white;
}
	label{
	color:black;
	text-align:center;
}
	#add{margin:10px;}
	span.error p{
	color:white;
	}
	textarea{
	text-align:center;
	border: none;
	border-radius: 10px;
	width: 100%;
	height:50px;
	margin-bottom:7px;
	height: 1px;
	padding: 20px;
	 background-color:#304050;
color: black;
}
.registration_left{

	font-family: monotype corsiva;

}

	</style>
	</head>
	<body>




<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2 style='color:black;font-weight: bold;'> New User ! <span style='color:black;'>Create an Account</span></h2>


		 <div class="registration_form">
		 <!-- Form -->
			<form  id="registration_form" action="<?php echo($_SERVER['PHP_SELF'] ) ?>" method="post">
				<div>
					<label>
						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background:#c7c7c7;color:white;" placeholder="Name" type="text" tabindex="1" name='fname' >
						<?php
						if(isset($error["fname"]))
		echo($error["fname"])

	?>
					</label>
				</div>



				<div>
					<label>
						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background:#c7c7c7;color:white;" placeholder="Password" type="password" name='passw' tabindex="4" >
											<?php
						if(isset($error["passw"]))
		echo($error["passw"])

	?>
					</label>
				</div>
				<div>
					<label>
						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background:#c7c7c7;color:white;" placeholder="Confirm Password" type="password" name='pas' tabindex="4" >
																<?php
						if(isset($error["pas"]))
		echo($error["pas"])

	?>
					</label>

					<div>

						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background:#c7c7c7;color:white;" placeholder="Email" type="email" tabindex="3" name='email1' >
											<?php
						if(isset($error["email1"]))
		echo($error["email1"])

	?>

				</div>
				</div>
				<div>
					<input style="	font-family: raleway; text-align:center;border-radius:10px;width:60%;height:35px;background:#123132;color:#bcbcbc;" type="submit" value="Create an Account" id="register-submit" name="send">
				</div>

			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2 style='font-weight: bold; padding:1px 50px;color:black;'>User Already Exists</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<div>
					<label>
						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background:#c7c7c7;color:white;" placeholder="User Name" type="text" name='userlogin' tabindex="3" >
											<?php
						if(isset($error["lname"]))
		echo($error["lname"])

	?>

					</label>
				</div>
				<div>
					<label>
						<input style="text-align:center;border-radius:10px;width:60%;height:35px;background-color:#c7c7c7;color:white;" placeholder="Password" type="password" name='userpassword' tabindex="4" >
																<?php
						if(isset($error["lpass"]))
		echo($error["lpass"])

	?>
					</label>
				</div>
				<div>
					<input style="font-family: raleway; text-align:center;border-radius:10px;width:60%;height:35px;background:#123132;color:#bcbcbc;" type="submit" value="Sign in" id="register-submit" name='login'>
				</div>

			</form>

			</div>
	</div>
	<div class="clearfix"></div>
	</div>

</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>
