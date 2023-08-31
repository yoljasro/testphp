<?php session_start();

if (!isset($_SESSION['UserData']['Username'])) {
  header("location:../login.php");
  exit;
}
$jsondata = file_get_contents("../../assets/kurs.json");
$array_data = json_decode($jsondata, true);
$item = $array_data[(int)$_GET['id']];
?>
<?php include('../sidebar2.php'); ?>

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
        <h3 class="fs-4 mb-3">Изменить</h3>

      </div>
    </div>



  </div>

  <div class="container-fluid px-4">


    <form action="edit2.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz">
              Название курса</label>
            <input type="text" class="form-control" id="docnameuz" name="docnameuz" value="<?php echo $item['docnameuz'] ?>">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru">
              Описания</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru" name="docnameru"><?php echo $item['docnameru'] ?></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru" value="<?php echo $item['docnameru'] ?>"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen">
              Список (курсы надо разделить через Enter)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen" name="docnameen"><?php echo $item['docnameen'] ?></textarea>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz2">
              Название курса</label>
            <input type="text" class="form-control" id="docnameuz2" name="docnameuz2" value="<?php echo $item['docnameuz2'] ?>">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru2">
              Описания</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru2" name="docnameru2"><?php echo $item['docnameru2'] ?></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru" value="<?php echo $item['docnameru'] ?>"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen2">
              Список (курсы надо разделить через Enter)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen2" name="docnameen2"><?php echo $item['docnameen2'] ?></textarea>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz3">
              Название курса</label>
            <input type="text" class="form-control" id="docnameuz3" name="docnameuz3" value="<?php echo $item['docnameuz3'] ?>">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru3">
              Описания</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru3" name="docnameru3"><?php echo $item['docnameru3'] ?></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru" value="<?php echo $item['docnameru'] ?>"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen3">
              Список (курсы надо разделить через Enter)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen3" name="docnameen3"><?php echo $item['docnameen3'] ?></textarea>
          </div>
        </div>
      </div>


      <div class="form-group mb-3">
        <label for="file">
          Изображение</label>
        <input id="file" type="text" name="file" value="<?php echo $item['file'] ?>" readonly="">
        <a href="../../assets/kurs/filemanager/dialog.php?relative_url=1&type=0&field_id=file" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
      </div>


      <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>


  </div>

  <!--Page content ends here-->


  <script>
    document.getElementById('item8').classList.toggle("active");
  </script>
  <?php include('../footer2.php'); ?>