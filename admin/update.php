
<?php
ob_start();
require_once('admin/dbs/db.php');
include("nav.php");
//session_start();
?>
<style>
input,img{
	text-align:center;
	float:left;
}
</style>
<?php

 $id=$_GET['id'];
 $sql="SELECT password FROM users WHERE id=$id";
$q=$con->prepare($sql);
$q->execute();
$row=$q->fetchall();
foreach ($row as  $value) {
	# code...
}
$passwo=$value['password'];
 
if(isset($_SESSION['username']))
		{
					$name=$_SESSION['username'];}
if ($_SERVER['REQUEST_METHOD']=="POST" ) {
	if (isset($_POST['send'])) {
		if (!empty($_POST['name']) and !empty($_POST['pass']) ) {
			include("image.php");
        $em= $_POST['name'];
        $pm= $_POST['pass'];
		
	    if($pm==$_POST['pass']){
			$sql="UPDATE users
			SET name='$em',password='$pm',image='$filename'
			WHERE id=$id;";
			$q=$con->prepare($sql);
		$q->execute();
		}
		else{
			$pp==$_POST['pass'];
			$sql="UPDATE users
			SET name='$em',password=md5('$pp'),image='$filename'
			WHERE id=$id;";
			$q=$con->prepare($sql);
		$q->execute();
			
		}
			
		echo "<script>alert('++ updated ++') </script>";
		header("REFRESH:0;URL=indexs.php")	;
		
		}
		else
		{
	echo "<script>alert('++not updated++') </script>";
	header("REFRESH:0;URL=indexs.php")	;
		}	}
	}

?>
<?php

 $id=$_GET['id'];
$sql="SELECT image,name,password FROM users WHERE id=$id";
$q=$con->prepare($sql);
$q->execute();
$row=$q->fetchall();
foreach ($row as  $value) {
	# code...

$image=$value['image'];
$name=$value['name'];
$pass=$value['password'];


}
echo'<br>';
 echo '  <img  src=admin/upload/'.$value["image"] .'  class="img-sqare" height="18%" width="14%" alt="">';
?>
<br></br>

<form   action="<?php $_SERVER['PHP_SELF'] ; ?>" method='post' enctype="multipart/form-data">
	<br><br><br><br>
	<input type="text" name="name" value="<?php echo $name;  ?>"><br><br>
	<input type="text" name="pass" value="<?php echo $pass;  ?>"><br><br>
    <input type="file" name='img' id='image'  > <br><br>
    <input type="submit" name="send" value="update"><br><br>
	</form>
	<?php
echo'<br><br>';
include("footer.php");
?>



