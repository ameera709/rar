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
  padding: 230px;
  text-align: center;
  background-image:url('https://static.wixstatic.com/media/fd87e886ddcf41598ee251852fffc58d.jpg/v1/fill/w_900,h_1350,al_c,q_85,usm_0.66_1.00_0.01/Peeping%20Through%20a%20Leaf.webp') ;
  background-position: 0cm  -10cm;
  background-repeat: no-repeat;
  background-size: 100%;
  font-family:raleway;
  font-size: 90px;
  border: 3px solid #bbb4b7a1;
  color: #ab7d95;
}
.header p {
  font-size: 80px;
  margin-top:5%;
  color:#ad5e87;
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
  <p id="hed">ــــ FAVORITE ــــ </p>
</div>

<div style='background-color:#bbb4b7a1; ' class="container text-center">
  <br>
  <?php
	 $sql='SELECT * FROM products WHERE favorite=1 ORDER BY id  DESC ;';
   $q=$con->prepare($sql);
   $q->execute();
   $row=$q->fetchall();

      foreach( $row as $value)
   {
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
        else if (  $id =="64") {
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
      else  if (  $id =="75") {
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
   else if (  $id =="90") {
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
else if (  $id =="38") {
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
		 echo "<a ' href='?action=unfavorite&id=$id'"."<i><img src=admin/upload/herti.png height='3%' width='3%'></i></a><br>";
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
