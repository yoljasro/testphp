<?php session_start();

if (!isset($_SESSION['UserData']['Username'])) {
  header("location:../login.php");
  exit;
}
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
        <h3 class="fs-4 mb-3">Добавить курс</h3>

      </div>
    </div>



  </div>

  <div class="container-fluid px-4">


    <form action="add2.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz">
              Название курса</label>
            <input type="text" class="form-control" id="docnameuz" name="docnameuz" placeholder="Название курса">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru">
              Описания</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru" name="docnameru" placeholder="Описания"></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen">
              Список (курсы надо разделить через Enter)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen" name="docnameen" placeholder="Список (курсов)"></textarea>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz2">
              Kurs nomi</label>
            <input type="text" class="form-control" id="docnameuz2" name="docnameuz2" placeholder="Kurs nomi">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru2">
              Tarifi</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru2" name="docnameru2" placeholder="Tarifi"></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen2">
              Ro'yhat (kurslarni Enter bo'yicha pastga ajrating)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen2" name="docnameen2" placeholder="Kurslar (ro'yhat)"></textarea>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameuz3">Course name
</label>
            <input type="text" class="form-control" id="docnameuz3" name="docnameuz3" placeholder="Course name">
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameru3">
            Descriptions</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameru3" name="docnameru3" placeholder="Descriptions"></textarea>
            <!-- <input type="text" class="form-control" id="docnameru" name="docnameru"> -->
          </div>
          <div class="form-group mb-3" style="padding-top:20px">
            <label for="docnameen">
            List (courses must be divided by Enter)</label>
            <textarea rows="4" cols="45" class="form-control" id="docnameen3" name="docnameen3" placeholder="List (courses)"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="file">
          Файл</label>
        <input id="file" type="text" name="file" value="" readonly="">
        <a href="../../assets/kurs/filemanager/dialog.php?relative_url=1&type=0&field_id=file" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
      </div>

      <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>


  </div>

  <!--Page content ends here-->


  <script>
    document.getElementById('item7').classList.toggle("active");
  </script>
  <?php include('../footer2.php'); ?>