<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
    }
    ?>
<?php include('../sidebar2.php');?>

<!--Page content starts from here-->

<div class="container-fluid px-4">
  <div class="row g-3">
    <div class="col-md-1">
      <a href="index.php" style="text-decoration: none !important">
        <div class="d-flex justify-content-around bg-white rounded">
          <h3 class="fs-2"><i class="fas fa-long-arrow-alt-left me-2"></i></h3>

        </div>
      </a>
    </div>
    <div class="col-md-3">
      <div class="d-flex justify-content-around">
        <h3 class="fs-4 mb-3">Добавить продукта</h3>

      </div>
    </div>



  </div>

  <div class="container-fluid px-4">


    <form action="add2.php" method="post" enctype="multipart/form-data">
      <div class="form-group mb-3" style="padding-top:20px">
        <label for="pnameuz">
          Название продукта(uz)</label>
        <input type="text" class="form-control" id="pnameuz" name="pnameuz">
      </div>
      <div class="form-group mb-3" style="padding-top:20px">
        <label for="pnameru">
          Название продукта(ru)</label>
        <input type="text" class="form-control" id="pnameru" name="pnameru">
      </div>
      <div class="form-group mb-3" style="padding-top:20px">
        <label for="pnameen">
          Название продукта(en)</label>
        <input type="text" class="form-control" id="pnameen" name="pnameen">
      </div>
      <div class="form-group mb-3">
    <label for="rasm">
изображение</label>
    <input id="rasm" type="text" name="rasm" value="" readonly="">
	  <a href="../../assets/products/filemanager/dialog.php?relative_url=1&type=0&field_id=rasm" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
  </div>
      <div class="form-group mb-3" style="padding-top:20px">
        <label for="tip">
          Выберите категорию</label>
        <?php
                $jsondata=file_get_contents("../../assets/categories.json");
                $array_data=json_decode($jsondata,true);
                $i=0;
                ?><br>
        <?php foreach($array_data as $catname){?>
        <input type="checkbox" name="selcat[]" value="<?php echo $catname['catid'];?>"><?php echo $catname['catru'];?><br>
        <?php $i=$i+1;}?>

      </div>


      <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>


  </div>

  <!--Page content ends here-->


  <script>
    document.getElementById('item6').classList.toggle("active");
  </script>
  <?php include('../footer2.php');?>