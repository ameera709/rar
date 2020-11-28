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
  background-image:url('admin/upload/hairstyle_head.png') ;
  background-repeat: no-repeat;
  background-size: 100%;
  font-family:raleway;
  font-size: xxx-large;
  width:100%;
  border: 3px solid #bbb4b7a1;
  color: #b6ac92;
}
.header p {
  font-size: 70px;
  margin-top:5%;
  color:#b6ac92;
}
.st{
  color: black;
}
.w3-container img{
   border-radius: 50%;
}

  </style>

</head>

<body>
<div class="header">
  <p id="hed"> ــــ HAIR STYLE ــــ </p>
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
     if($value["s_group"] !=1 and $value["s_group"] !=2 and $value["s_group"] !=3  and $value["s_group"] !=5)
     {

	 echo ' <div   class="row">';



         echo ' <div class="wel">';

         $id=$value['id'];
            if (  $id =="38") {
              echo '  <a class="w3-container" href="https://instagram.com/rihamartist?igshid=kd3vcg4lkdkl" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/rihamartist?igshid=kd3vcg4lkdkl" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="37") {
              echo '  <a class="w3-container" href="https://instagram.com/ghaddahabdulaziz?igshid=kmzhnhs4c04w" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/ghaddahabdulaziz?igshid=kmzhnhs4c04w" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="36") {
              echo '  <a class="w3-container" href="https://instagram.com/batool_hairstyle?igshid=qrg3dbwmtwqi" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/batool_hairstyle?igshid=qrg3dbwmtwqi" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="35") {
              echo '  <a class="w3-container" href="https://instagram.com/hairstylest.sh?igshid=ckg11blhuoz2" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/hairstylest.sh?igshid=ckg11blhuoz2" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="34") {
              echo '  <a class="w3-container" href="https://instagram.com/asma_yuosef?igshid=zbfe2j1c7lob" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/asma_yuosef?igshid=zbfe2j1c7lob" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="33") {
              echo '  <a class="w3-container" href="https://instagram.com/wafa_hairstyle?igshid=ihus5og9xyoc" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/wafa_hairstyle?igshid=ihus5og9xyoc" target="_blank">' . $value["header"].' </a></u>';
           }
            else if (  $id =="32") {
              echo '  <a class="w3-container" href="https://instagram.com/chic_salon_sa?igshid=1m7lp2u65sn42" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/chic_salon_sa?igshid=1m7lp2u65sn42" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="30") {
              echo '  <a class="w3-container" href="https://instagram.com/njoud_hairstylist?igshid=12wpgn5aw0hzm" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/njoud_hairstylist?igshid=12wpgn5aw0hzm" target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="19") {
              echo '  <a class="w3-container" href="https://www.instagram.com/zaina_hairstylist/?igshid=1dw3nkhvy8o68 " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://www.instagram.com/zaina_hairstylist/?igshid=1dw3nkhvy8o68 " target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="16") {
              echo '  <a class="w3-container" href="https://www.instagram.com/patcholi_qs/?igshid=8regiznfevga  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://www.instagram.com/patcholi_qs/?igshid=8regiznfevga " target="_blank">' . $value["header"].' </a></u>';
           }
           else if (  $id =="15") {
              echo '  <a class="w3-container" href="https://instagram.com/js.hairstylist7?igshid=15trsolr3gy29  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://instagram.com/js.hairstylist7?igshid=15trsolr3gy29" target="_blank">' . $value["header"].' </a></u>';
           }
	      else if (  $id =="14") {
              echo '  <a class="w3-container" href="https://www.instagram.com/maramalaayed/?igshid=fxmj1h1oy89e " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
              echo '<br><u><a class="st" href="https://www.instagram.com/maramalaayed/?igshid=fxmj1h1oy89e" target="_blank">' . $value["header"].' </a></u>';
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
