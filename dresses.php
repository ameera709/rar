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
  background-image:url('admin/upload/dresseshead.png') ;
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
  margin-top:5%;
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
  <p id="hed"> ــــ DRESSES ــــ </p>
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
     if($value["s_group"] !=2 and $value["s_group"] !=3 and $value["s_group"] !=4  and $value["s_group"] !=1)
     {

	 echo ' <div   class="row">';



         echo ' <div class="wel">';

         $id=$value['id'];
          if (  $id =="39") {
           echo '  <a class="w3-container" href="https://www.instagram.com/anno_boutique/?igshid=9dpjj7vs5dds " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
           echo '<br><u><a class="st" href=" https://www.instagram.com/anno_boutique/?igshid=9dpjj7vs5dds " target="_blank">' . $value["header"].' </a></u>';
        }
        else if (  $id =="40") {
          echo '  <a class="w3-container" href="https://www.instagram.com/moeshour/?igshid=1ad1d1fd19btv " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
          echo '<br><u><a class="st" href=" https://www.instagram.com/moeshour/?igshid=1ad1d1fd19btv " target="_blank">' . $value["header"].' </a></u>';
       }else if (  $id =="41") {
         echo '  <a class="w3-container" href="https://www.beamkw.com/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
         echo '<br><u><a class="st" href=" https://www.beamkw.com/ " target="_blank">' . $value["header"].' </a></u>';
      }else if (  $id =="42") {
        echo '  <a class="w3-container" href="https://www.instagram.com/monirahalomarofficial/?igshid=12z2jbromekd " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
        echo '<br><u><a class="st" href=" https://www.instagram.com/monirahalomarofficial/?igshid=12z2jbromekd " target="_blank">' . $value["header"].' </a></u>';
     }else if (  $id =="43") {
       echo '  <a class="w3-container" href=" https://www.instagram.com/7details/?igshid=3fm9ku8w0gl3" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
       echo '<br><u><a class="st" href="  https://www.instagram.com/7details/?igshid=3fm9ku8w0gl3" target="_blank">' . $value["header"].' </a></u>';
    }else if (  $id =="44") {
      echo '  <a class="w3-container" href=" https://ameliebaku.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
      echo '<br><u><a class="st" href="  https://ameliebaku.com/" target="_blank">' . $value["header"].' </a></u>';
   }else if (  $id =="45") {
     echo '  <a class="w3-container" href=" https://www.instagram.com/n.o.u.f.alsubaie/?igshid=1gy4nh57w5ne1" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
     echo '<br><u><a class="st" href=" https://www.instagram.com/n.o.u.f.alsubaie/?igshid=1gy4nh57w5ne1 " target="_blank">' . $value["header"].' </a></u>';
  }else if (  $id =="46") {
    echo '  <a class="w3-container" href="https://www.instagram.com/the_wardrobe_bh/?igshid=8f7zqfl6pfdx " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
    echo '<br><u><a class="st" href="  https://www.instagram.com/the_wardrobe_bh/?igshid=8f7zqfl6pfdx" target="_blank">' . $value["header"].' </a></u>';
 }else if (  $id =="47") {
   echo '  <a class="w3-container" href=" https://online.flippingbook.com/view/215778/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
   echo '<br><u><a class="st" href="  https://online.flippingbook.com/view/215778/" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="48") {
  echo '  <a class="w3-container" href=" https://www.jolnaar.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://www.jolnaar.com/" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="49") {
  echo '  <a class="w3-container" href=" http://www.fouzboutique.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  http://www.fouzboutique.com/" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="50") {
  echo '  <a class="w3-container" href=" https://asbarbyg.com/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href=" https://asbarbyg.com/ " target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="51") {
  echo '  <a class="w3-container" href="https://mnboutiquekw.com/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="https://mnboutiquekw.com/  " target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="52") {
  echo '  <a class="w3-container" href=" https://www.instagram.com/modish.kw/" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="https://www.instagram.com/modish.kw/  " target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="53") {
  echo '  <a class="w3-container" href=" https://instagram.com/darlana_fashion?igshid=o9x8squwvmhl" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://instagram.com/darlana_fashion?igshid=o9x8squwvmhl" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="54") {
  echo '  <a class="w3-container" href="https://razanalazzouni.com/collections/clothing-dresses " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href=" https://razanalazzouni.com/collections/clothing-dresses " target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="55") {
  echo '  <a class="w3-container" href="https://www.peek-kw.com/ " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://www.peek-kw.com/" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="56") {
  echo '  <a class="w3-container" href=" https://instagram.com/ea_designs?igshid=vjk5miwlptnm" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://instagram.com/ea_designs?igshid=vjk5miwlptnm" target="_blank">' . $value["header"].' </a></u>';
}else if (  $id =="57") {
  echo '  <a class="w3-container" href=" https://instagram.com/almaha_de?igshid=10vmz68m9l0rs" target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href=" https://instagram.com/almaha_de?igshid=10vmz68m9l0rs " target="_blank">' . $value["header"].' </a></u>';
}
else if (  $id =="58") {
  echo '  <a class="w3-container" href="https://www.instagram.com/beunique.kw/?igshid=rc37lj139t3m " target="_blank"><img src=admin/upload/'.$value["image"] .'  class="img-sqare" height="25%" width="25%" object-fit: cover;"></a>';
  echo '<br><u><a class="st" href="  https://www.instagram.com/beunique.kw/?igshid=rc37lj139t3m" target="_blank">' . $value["header"].' </a></u>';
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
