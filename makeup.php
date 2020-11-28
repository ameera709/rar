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
  background-image:url('admin/upload/makeup.png') ;
  background-repeat: no-repeat;
  background-size: 100%;
  font-family:raleway;
  font-size: xxx-large;
  width:100%;
  border: 3px solid #bbb4b7a1;
  color: #b6ac92;
}
.header p {
  font-size: 90px;
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
  <p id="hed">ــــ MAKE UP ــــ  </p>
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
     if($value["s_group"] !=1 and $value["s_group"] !=3 and $value["s_group"] !=4  and $value["s_group"] !=5)
     {

	 echo ' <div   class="row">';



         echo ' <div class="wel">';

     $id=$value['id'];
     if (  $id =="75") {
      echo '  <a class="w3-container" href="https://instagram.com/muneera.makeup95?igshid=czszy24mt5e3" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
      echo '<br><u><a class="st" href="https://instagram.com/muneera.makeup95?igshid=czszy24mt5e3" target="_blank">' . $value["header"].' </a></u>';
   }
     else if (  $id =="76") {
       echo '  <a class="w3-container" href="https://instagram.com/hoor_makeupartist?igshid=hbfzhhmn378l" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
       echo '<br><u><a class="st" href="https://instagram.com/hoor_makeupartist?igshid=hbfzhhmn378l" target="_blank">' . $value["header"].' </a></u>';
    }
    else if (  $id =="77") {
      echo '  <a class="w3-container" href="  https://instagram.com/lolla_artist?igshid=1swytes2nazxs  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
      echo '<br><u><a class="st" href="   https://instagram.com/lolla_artist?igshid=1swytes2nazxs " target="_blank">' . $value["header"].' </a></u>';
   }
   else if (  $id =="78") {
     echo '  <a class="w3-container" href="   https://instagram.com/makeup_by_shroug?igshid=97uut8f5ffdn " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
     echo '<br><u><a class="st" href="  https://instagram.com/makeup_by_shroug?igshid=97uut8f5ffdn  " target="_blank">' . $value["header"].' </a></u>';
  }
  else if (  $id =="79") {
    echo '  <a class="w3-container" href="   https://instagram.com/norah.by.mkp?igshid=qz65fkbldi4f " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
    echo '<br><u><a class="st" href="   https://instagram.com/norah.by.mkp?igshid=qz65fkbldi4f " target="_blank">' . $value["header"].' </a></u>';
 }
 else if (  $id =="80") {
   echo '  <a class="w3-container" href="   https://instagram.com/a.makeup.art?igshid=1melktz55iqsm " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
   echo '<br><u><a class="st" href="   https://instagram.com/a.makeup.art?igshid=1melktz55iqsm " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="81") {
  echo '  <a class="w3-container" href=" https://instagram.com/muekaup?igshid=pk5ktmzb1vh7   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/muekaup?igshid=pk5ktmzb1vh7 " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="82") {
  echo '  <a class="w3-container" href="https://instagram.com/tuofy9_makeup?igshid=it8x5urmm41l    " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/tuofy9_makeup?igshid=it8x5urmm41l " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="83") {
  echo '  <a class="w3-container" href=" https://www.instagram.com/rawan.mua11/?igshid=13sbvzyw5ofv1   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://www.instagram.com/rawan.mua11/?igshid=13sbvzyw5ofv1  " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="84") {
  echo '  <a class="w3-container" href="  https://www.instagram.com/hadeel4makeup/?igshid=11raw07omgyvw  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://www.instagram.com/hadeel4makeup/?igshid=11raw07omgyvw " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="85") {
  echo '  <a class="w3-container" href="  https://instagram.com/jawaher88?igshid=3vxkvir6iovd  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/jawaher88?igshid=3vxkvir6iovd " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="86") {
  echo '  <a class="w3-container" href=" https://instagram.com/ranamakeup11?igshid=uw78ngiddjbu   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/ranamakeup11?igshid=uw78ngiddjbu " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="87") {
  echo '  <a class="w3-container" href=" https://instagram.com/ahood.n.g?igshid=1fl8e4tgvbadz   " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://instagram.com/ahood.n.g?igshid=1fl8e4tgvbadz  " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="88") {
  echo '  <a class="w3-container" href="  https://instagram.com/ghaddahabdulaziz?igshid=kmzhnhs4c04w  " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/ghaddahabdulaziz?igshid=kmzhnhs4c04w " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="89") {
  echo '  <a class="w3-container" href="   https://instagram.com/manalalmane?igshid=1nxwtag0nvq7l " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="   https://instagram.com/manalalmane?igshid=1nxwtag0nvq7l " target="_blank">' . $value["header"].' </a></u>';
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
