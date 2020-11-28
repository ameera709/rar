<?php
ob_start(); require_once('dbs/db.php');
include("panel.php");


?>
     <?php

if (isset($_GET['action'],$_GET['id'])) {
	$id=$_GET['id'];
    switch ($_GET['action']) {
        case 'delete':
           $sql="DELETE FROM users WHERE id=:sid";
           $q=$con->prepare($sql);
           $q->execute(array("sid"=>$_GET['id']));
		   echo "<script> alert('Deleted The User's number $id ')</script>";
            break;
             case 'active':
           $sql="UPDATE users 
           SET state=1
           WHERE id=:sid";
           $q=$con->prepare($sql);
           $q->execute(array("sid"=>$_GET['id']));
		     echo "<script> alert('Been Activated User number $id ')</script>";
            break;
			    case 'unactive':
           $sql="UPDATE users 
           SET state=0,usertype=0
           WHERE id=:sid";
           $q=$con->prepare($sql);
           $q->execute(array("sid"=>$_GET['id']));
		     echo "<script> alert('Been Canceled The membership of The user's no $id ')</script>";
            break;
			    case 'edit':
				
        include("edituser.php");
		
            break;

 case 'admin':
           $sql="UPDATE users 
           SET usertype=0
           WHERE id=:sid";
           $q=$con->prepare($sql);
           $q->execute(array("sid"=>$_GET['id']));
		     echo "<script> alert('Been Pull the Task of Supervision of the user's no $id ')</script>";
            break;	
 case 'toadmin':
           $sql="UPDATE users 
           SET usertype=1
           WHERE id=:sid";
           $q=$con->prepare($sql);
           $q->execute(array("sid"=>$_GET['id']));
		    echo "<script> alert('Were Selected user $id  Admin ')</script>";
            break;	
 case 'user':
         echo "<script> alert('Must be Activated user $id first Member')</script>";
            break;			
        
        default:
            # code...
            break;
    }
    # code...
}


     ?>

<!DOCTYPE html>
<html>
    <head>
	<style>

table{margin-right:20%;
background:black;
color:white;
border: none;
border-radius: 10px;
height: 1px;
padding: 15px;
}
th{text-align: center;border:1;}
td{text-align: center;}

</style>
        <meta charset="UTF-8">
        <title></title>
	
		<link rel='stylesheet' href="css/font-awesome.min.css" />
    </head>
    <body>
	<div class='12'>
	<form action='adduser.php'>
		<input style="text-align:center;margin-right:64%;border-radius:10px; background:blue;color:white;" type=submit value='Add New User'>
		</form>

 <?php
                    $sql="SELECT * FROM users";
                    $q=$con->prepare($sql);
                    $q->execute();
                    $row=$q->fetchall();
                   
echo "<table border=1 width=70%>";
echo "<tr width='20px' border='1'>";
echo "<th>"."id "."</th>";
echo "<th>"."Name"."</th>";
echo "<th>"."Password"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Birth_Day"."</th>";
echo "<th>"."Image"."</th>";
echo "<th colspan=3>"."Process"."</th>";
echo "<th>"."Status"."</th>";
echo "</tr>";
foreach ($row as  $value) {
                   $id=$value[0];
                    $name=$value[1];
                    $password=$value[2];
					$email=$value[3];
					$state=$value['state'];
					$date=$value['dataofbirth'];
					$image=$value['image'];
                    echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$password."</td>";
echo "<td>".$email."</td>";
echo "<td>".$date."</td>";
//echo "<td>".$image."</td>";
echo "<td>"."<img src=upload/".$value['image']."  style='width:50px;height:45px;'>"."</td>";

echo "<td>"."<a href='?action=edit&id=$id'"."<i class='fa fa-edit'></i></a>"."</td>";
echo "<td>"."<a href='?action=delete&id=$id'"."<i class='fa fa-trash'></i></a>"."</td>";
if($state==0)
	echo "<td>"."<a href='?action=active&id=$id'"."<i class='fa fa-check'></i></a>"."</td>";
else
	echo "<td>"."<a href='?action=unactive&id=$id'"."<i class='fa fa-remove'></i></a>"."</td>";
if($value['usertype']==0 and $state==0)
	echo "<td>"."<a href='?action=user&id=$id'"."<i >User</i></a>"."</td>";
else if ($value['usertype']==0 and $state==1)
	echo "<td>"."<a href='?action=toadmin&id=$id'"."<i >Member</i></a>"."</td>";
else if ($value['usertype']==1 and $state==1)
	echo "<td>"."<a href='?action=admin&id=$id'"."<i '>Admin</i></a>"."</td>";
echo "</tr>";
    # code...
}
echo "</table >";

        ?>
		</div>
		<br><br>
		<?php
include("../footer.php");
?>
		</body>
		</html>