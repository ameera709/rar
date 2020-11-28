<?php
require_once('admin/dbs/db.php');
include("nav.php");
include('admin/newscheck.php');
?>
<head>
<link rel = "icon" href ="admin/upload/rar.png" type = "image">
 <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 10px;
    }
     .container{
		 width:100%;
	 }
    .row.content {height: 450px}

    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
	  height:250px;
  }
.id1{
	 font-family: monotype corsiva;
	 text-align:center;
	 font-size:20px;
	 color:red;

}
.wel{
	border:none;
	text-align:center;
	width:100%;
}
.head-hair,.header{
  padding:300px;
  text-align: center;
  background-image:url('admin/upload/skinhead.png') ;
  background-repeat: no-repeat;
  background-size: 100%;
  font-family:raleway;
  font-size: xxx-large;
  width:100%;
  border: 3px solid #bbb4b7a1;
  color: #b6ac92;
}
.header p {
  font-size: 80px;
  margin-top:5%;
  color:#45573a;
}
.st{
  color: black;
}

  </style>

</head>

<body>
<div class="header">
  <p id="hed">ــــ SKIN CARE  ــــ  </p>
</div>

<div style='background-color:#bbb4b7a1; ' class="container text-center">
  <br>
  <?php
   $sql='SELECT * FROM products ORDER BY id  DESC ;';
   $q=$con->prepare($sql);
   $q->execute();
   $row=$q->fetchall();

      foreach( $row as $value)
   {
     if($value["s_group"] !=1 and $value["s_group"] !=2 and $value["s_group"] !=4  and $value["s_group"] !=5)
     {

	 echo ' <div   class="row">';



         echo ' <div class="wel">';
         $id=$value['id'];
         if (  $id =="90") {
          echo '  <a class="w3-container" href="https://snowwhite-arabia.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
          echo '<br><u><a class="st" href="https://snowwhite-arabia.com/" target="_blank">' . $value["header"].' </a></u>';
        }
         else if (  $id =="91") {
           echo '  <a class="w3-container" href="https://www.instagram.com/jayla.sa/?igshid" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
           echo '<br><u><a class="st" href="https://www.instagram.com/jayla.sa/?igshid" target="_blank">' . $value["header"].' </a></u>';
        }
        else if (  $id =="92") {
          echo '  <a class="w3-container" href="https://www.frankbody.com/us/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
          echo '<br><u><a class="st" href="https://www.frankbody.com/us/" target="_blank">' . $value["header"].' </a></u>';
       }
       else if (  $id =="93") {
         echo '  <a class="w3-container" href="https://nv.sa/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
         echo '<br><u><a class="st" href="https://nv.sa/" target="_blank">' . $value["header"].' </a></u>';
      }
      else if (  $id =="94") {
        echo '  <a class="w3-container" href="https://mbcosmetic.com.sa/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
        echo '<br><u><a class="st" href=" https://mbcosmetic.com.sa/" target="_blank">' . $value["header"].' </a></u>';
     }
     else if (  $id =="95") {
       echo '  <a class="w3-container" href="https://organicsbeautysa.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
       echo '<br><u><a class="st" href="https://organicsbeautysa.com/" target="_blank">' . $value["header"].' </a></u>';
    }
    else if (  $id =="96") {
      echo '  <a class="w3-container" href="https://salla.sa/sugarglow" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
      echo '<br><u><a class="st" href="https://salla.sa/sugarglow" target="_blank">' . $value["header"].' </a></u>';
   }
   else if (  $id =="97") {
     echo '  <a class="w3-container" href="https://www.instagram.com/patcholi_qs/?igshid=8regiznfevga" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
     echo '<br><u><a class="st" href="https://www.instagram.com/patcholi_qs/?igshid=8regiznfevga" target="_blank">' . $value["header"].' </a></u>';
  }
  else if (  $id =="98") {
    echo '  <a class="w3-container" href="https://www.instagram.com/tan_at_home/?igshid=1eq3lhagwei8q" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
    echo '<br><u><a class="st" href="https://www.instagram.com/tan_at_home/?igshid=1eq3lhagwei8q" target="_blank">' . $value["header"].' </a></u>';
 }


      echo "<p style='margin-bottom:10px;margin-top:10px;'><b>" . $value["note"]."</b></p>";
		 echo "<a ' href='?action=favorite&id=$id'"."<i><img src=admin/upload/herti.png height='3%' width='3%'></i></a><br>";
		 echo' <div class"col-md-4"> ';
         echo '   </div>



        </div>

      </div>  ';

   }

   }
       ?>


    </div>

</body>
<?php

include("footer.php");


?>
