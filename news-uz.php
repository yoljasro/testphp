<?php
if(!isset($_GET['page'])){
    header("location:news-uz.php?page=0");
    exit;
}else{
  $jsondata=file_get_contents("assets/news.json");
  $array_data=json_decode($jsondata,true);
  if((intval($_GET['page'])>0)&&(intval($_GET['page'])*10+1>count($array_data))){
    header("location:news-uz.php?page=".strval(intval(count($array_data)/10)));
    exit;
  }
}
?>




<!DOCTYPE html>
<html lang="uz">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>O‘zbekiston oshpazlar uyushmasi</title>
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

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent" style="background-color:#333">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
  
  <a href="index-uz.php">  <i style=" font-size:40px;padding-left:20px" class="bi bi-house-fill"></i> </a>

  
    <i style="margin-left:10%" class="bi bi-phone d-flex align-items-center"><span>+998712667800, </span> <span class="ikk"> +998712667778
        </span></i>

      <i class="bi bi-geo-alt-fill ms-4 d-none d-lg-flex align-items-center"><span>O‘zbekiston Respublikasi, Toshkent shahri, Mirzo Ulug‘bek tumani, st. Oltin tepa, 354-uy

        </span></i>
      
    </div>

    <div class="language" style="margin-right:40px; font-family: 'Lobster', cursive; display: flex;">
      <a href="news-en.php?page=<?php echo $_GET['page']?>"><img class="flag" src="assets/img/flag/640px-Flag_of_the_United_Kingdom.svg.png"
          alt=""></a>
      <a href="news-ru.php?page=<?php echo $_GET['page']?>"><img class="flag" src="assets/img/flag/Flag_of_Russia.png"
          alt=""></a>
      <a style="color:rgb(255, 255, 255);" href="news-uz.php?page=<?php echo $_GET['page']?>"><img class="flag" src="assets/img/flag/1200px-Flag_of_Uzbekistan.png" alt=""></a>

    </div>

  </section>

  <!-- =======  Header ======= -->
   
  </header><!-- End Header -->

  <?php $jsondata=file_get_contents("assets/news.json");
                $array_data=json_decode($jsondata,true);$i=0;?>
  <section id="why-us" class="why-us" style="padding-top:100px;">
    <div class="container">

      <div class="section-title">
      <h2><span>Yangiliklar</span></h2>
      </div>

      <div class="row">
        <?php foreach(array_slice($array_data, ($_GET['page'])*10, 10,true) as $item){
          
          ?>
        <div class="col-lg-12" style="margin-top:30px;">
          <a href="news-single-uz.php?id=<?php echo ($_GET['page'])*10+$i?>">
            <div class="box" style="display:flex; flex-wrap:wrap;padding: 20px 20px;">
              <span class="col-lg-3 col-md-4 col-sm-12"><img src="assets/newsmainimg/source/<?php echo $item['rasm']?>" alt="" style="border-radius: 20px;width:100%;"></span>
              <div class="col-lg-8 col-md-7 col-sm-12" style="margin-left:20px;">
                <h4 style="font-family: 'Lobster', cursive;"><?php echo $item['titleuz']?></h4>
                <p><i class="bi bi-clock"></i> <?php echo $item['time']?></p>
                <p><?php echo $item['shortmeanuz']?></p>

              </div>
            </div>
          </a>
          <?php $i=$i+1;

        
        }?>
        </div>
        
      </div>
    </div>
    <div style="text-align:center;padding-top:30px;font-size:25px;">
      <p class="noselect"><?php if(intval($GET['page'])>0){
        echo "<a href=\"news-uz.php?page=".strval(intval($GET['page'])-1)."\"><i class=\"bi bi-arrow-left\"></i></a>";
      }?> <?php for($t=1;$t<=intval((count($array_data)-1)/10)+1;$t++){
        echo "<a href=\"news-uz.php?page=".strval($t-1)."\">".strval($t)."</a> ";}?>   <?php 
      if($_GET['page']<intval((count($array_data)-1)/10)){
        echo "<a href=\"news-uz.php?page=".strval(intval($GET['page'])+1)."\"><i class=\"bi bi-arrow-right\"></i></a>";}?></p>
      </div>
  </section><!-- End Whu Us Section -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>