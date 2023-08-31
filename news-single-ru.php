<!DOCTYPE html>

<html lang="ru">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Ассоциация Повaров Узбекистана</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/noroot.png" rel="icon">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link

    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"

    rel="stylesheet">



  <!-- Vendor CSS Files -->

  <!-- CSS only -->

  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link

    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Caveat:wght@700&family=Comforter+Brush&family=Lobster&display=swap"

    rel="stylesheet">

  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"

    rel="stylesheet">

  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"

    rel="stylesheet">

  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">

  </script>

  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">



  </script>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp'>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>



  <link href="assets/css/style.css" rel="stylesheet">





  <!-- =======================================================

  * Template Name: Delicious - v4.6.0

  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->

</head>



<body style="background-image:none !important;">

<style>

  .belgilangan:hover .yon:hover{

  background-color:#05a808;

  color:white;

}

  @media screen and (max-width: 768px) {

  

      .nene{

        font-size:9px !important;

    }
	img {
	 width:100%;
	height: inherit;
}
p{
font-size: 9px !important;
}
div{
font-size: 9px !important;
}
span{
font-size:9px !important;

}



</style>



  <!-- ======= Top Bar ======= -->

  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent" style="background-color:#333">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">

    <a onclick="history.go(-1);" style="padding-right:20px">  <i style=" font-size:33px;cursor:pointer;" class="bi bi-arrow-left-square-fill"></i> </a>

  <a href="index.php">  <i style=" font-size:40px;padding-left:20px" class="bi bi-house-fill"></i> </a>



  

    <i style="margin-left:10%" class="bi bi-phone d-flex align-items-center"><span>+998712667800, </span> <span class="ikk"> +998712667778

        </span></i>



      <i class="bi bi-geo-alt-fill ms-4 d-none d-lg-flex align-items-center"><span>Республика Узбекистан,г.Ташкент,Мирзо-Улугбекский район,ул.Олтин Тепа,дом 354



        </span></i>

      

    </div>



    <div class="language" style="margin-right:40px; font-family: 'Lobster', cursive; display: flex;">

      <a href="news-single-en.php?id=<?php echo $_GET['id']?>"><img class="flag" src="assets/img/flag/640px-Flag_of_the_United_Kingdom.svg.png"

          alt=""></a>

      <a style="color:rgb(255, 255, 255);" href="news-single-ru.php?id=<?php echo $_GET['id']?>"><img class="flag" src="assets/img/flag/Flag_of_Russia.png"

          alt=""></a>

      <a href="news-single-uz.php?id=<?php echo $_GET['id']?>"><img class="flag" src="assets/img/flag/1200px-Flag_of_Uzbekistan.png" alt=""></a>



    </div>



  </section>



  <!-- =======  Header ======= -->



  <?php $jsondata=file_get_contents("assets/news.json");

                $array_data=json_decode($jsondata,true);$i=0;

                if (array_key_exists(intval($_GET['id']), $array_data)) {

                  $array_data[intval($_GET['id'])]['views']=$array_data[intval($_GET['id'])]['views']+1;

                  $final_data=json_encode($array_data);

                  file_put_contents('assets/news.json',$final_data);

                }

                

                ?>

  

<div style=" margin-top:85px; text-align:center; " class="container-fluid nene" >

<div class="row">

<div class="col-8" style="padding: 20px 60px">

 

<i  class="bi bi-calendar"> <?php echo $array_data[intval($_GET['id'])]['time']?></i>   

<i style="margin-left:20px" class="bi bi-eye"> <?php echo $array_data[intval($_GET['id'])]['views']?></i>



 <br>

<br>

<b><?php 

if (array_key_exists(intval($_GET['id']), $array_data)) {

  echo $array_data[intval($_GET['id'])]['titleru'];

}

?></b> <br>



 

  

  

  <img style="padding-top:10px;padding-bottom:10px; width:100% " src="assets/newsmainimg/source/<?php echo $array_data[intval($_GET['id'])]['rasm']?>" alt="">

   

  

  <div style="text-align:justify;">

  <?php 

  if (array_key_exists(intval($_GET['id']), $array_data)) {

    echo $array_data[intval($_GET['id'])]['fullmeanru'];

  }

  

  ?>

  </div>

  </div>







  <div class="col-4" >

  <?php $i=0;

  foreach($array_data as $item){?>

  <a class="belgilangan" href="news-single-ru.php?id=<?php echo $i?>">

  <div class="yon" style="box-shadow: 0 0 2px grey; box-shadow: 0 0 10px green; padding-top:10px; border-radius: 0 20px;
} padding-bottom:17px; margin-bottom:20px">

      

  <img style=" width:70%;margin-top:10px;border-radius: 0 90px; height:200px; object-fit: cover; 
} " src="assets/newsmainimg/source/<?php echo $item['rasm']?>" alt="">



 

<div  style=" padding-top: 2%; font-size:14px" class="rowcha">

<p><i  class="bi bi-calendar"></i><?php echo $item['time']?>

<i style="margin-left:20px" class="bi bi-eye"></i><?php echo $item['views']?></p>



</div>



<b style="padding:8px 4px"><?php echo $item['titleru']?></b>



  </div>

  </a>

  <?php $i=$i+1;

            if($i==3){

              break;

            }

            }?>

  

  

</div>

</div>







  

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>





  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>





</body>



</html>