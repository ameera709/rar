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
  background-image:url('admin/upload/jew_head.png') ;
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
  margin-top:10%;
  color:#45573a;
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
  <p id="hed"> ــــ JEWELLERY ــــ </p>
  <h1 class="font_2" style="font-family: monotype corsiva ; font-size: xx-large; text-align:center;font-size:40px;color:#913439;  ">     !   Be Shiny     </h1>
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
     if($value["s_group"] !=2 and $value["s_group"] !=3 and $value["s_group"] !=4  and $value["s_group"] !=5)
     {

	 echo ' <div   class="row">';



         echo ' <div class="wel">';



       $id=$value['id'];
          if (  $id =="64") {
            echo '  <a class="w3-container" href="https://www.lustro.com.sa/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://www.lustro.com.sa/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="63") {
            echo '  <a class="w3-container" href="https://www.instagram.com/needle.rehaf/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://www.instagram.com/needle.rehaf/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="62") {
            echo '  <a class="w3-container" href="https://ar.swarovski.sa/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://ar.swarovski.sa/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="61") {
            echo '  <a class="w3-container" href="https://aurasjewelry.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://aurasjewelry.com/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="60") {
            echo '  <a class="w3-container" href="https://www.charmaleena.com/product-category/my-heart/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://www.charmaleena.com/product-category/my-heart/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="59") {
            echo '  <a class="w3-container" href="https://nora-shop.net/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://nora-shop.net/" target="_blank">' . $value["header"].' </a></u>';
         }
          else if (  $id =="65") {
            echo '  <a class="w3-container" href="https://ragail.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://ragail.com/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="66") {
            echo '  <a class="w3-container" href="https://www.instagram.com/sedra.jewellery/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://www.instagram.com/sedra.jewellery/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="67") {
            echo '  <a class="w3-container" href="https://www.instagram.com/navaljewelry/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="https://www.instagram.com/navaljewelry/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="68") {
            echo '  <a class="w3-container" href="https://goldorsilver-sa.com/   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href=" https://goldorsilver-sa.com/  " target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="69") {
            echo '  <a class="w3-container" href="  https://www.instagram.com/norsen_store/?igshid=17f0924pi18z0 " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href=" https://www.instagram.com/norsen_store/?igshid=17f0924pi18z0  " target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="70") {
            echo '  <a class="w3-container" href="  https://www.instagram.com/ls.jewelryy/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="   https://www.instagram.com/ls.jewelryy/" target="_blank">' . $value["header"].' </a></u>';
         } else if (  $id =="71") {
            echo '  <a class="w3-container" href="https://lavender-store.com/   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="  https://lavender-store.com/ " target="_blank">' . $value["header"].' </a></u>';
         } else if (  $id =="72") {
            echo '  <a class="w3-container" href="  https://www.instagram.com/indra_diamonds/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="   https://www.instagram.com/indra_diamonds/" target="_blank">' . $value["header"].' </a></u>';
         }
         else if (  $id =="73") {
             echo '  <a class="w3-container" href="https://www.instagram.com/feroza.headpieces/?igshid=37v9avcbjfgu" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
             echo '<br><u><a class="st" href="https://www.instagram.com/feroza.headpieces/?igshid=37v9avcbjfgu" target="_blank">' . $value["header"].' </a></u>';
          }
           else if (  $id =="74") {
            echo '  <a class="w3-container" href="  https://www.instagram.com/muscan.jewelry/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
            echo '<br><u><a class="st" href="   https://www.instagram.com/muscan.jewelry/" target="_blank">' . $value["header"].' </a></u>';
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
