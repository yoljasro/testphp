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
                        <a href="index.php" style="text-decoration: none !important"><div class="d-flex justify-content-around bg-white rounded">
                        <h3 class="fs-2"><i class="fas fa-long-arrow-alt-left me-2"></i></h3>
                            
                        </div>
                        </a>
                    </div>    
                    <div class="col-md-3">
                        <div class="d-flex justify-content-around">
                        <h3 class="fs-4 mb-3">Добавить отзыв</h3>
                            
                        </div>
                    </div>
                    
                    

                </div>

            <div class="container-fluid px-4">
                

            <form action="add2.php" method="post" enctype="multipart/form-data">
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishuz">
Ф.И.О.(uz)</label>
    <input type="text" class="form-control" id="fishuz" name="fishuz">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishru">
    Ф.И.О.(ru)</label>
    <input type="text" class="form-control" id="fishru" name="fishru">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishen">
    Ф.И.О.(en)</label>
    <input type="text" class="form-control" id="fishen" name="fishen">
  </div>
  <div class="form-group mb-3">
    <label for="rasm">
изображение</label>
    <input id="rasm" type="text" name="rasm" value="" readonly="">
	  <a href="../../assets/feedbacks/filemanager/dialog.php?relative_url=1&type=0&field_id=rasm" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
  </div>
  <div class="form-group mb-3">
    <label for="positionuz">Должность(uz)</label>
    <input type="text" class="form-control" id="positionuz" name="positionuz" value="">
  </div>
  <div class="form-group mb-3">
    <label for="positionru">Должность(ru)</label>
    <input type="text" class="form-control" id="positionru" name="positionru" value="">
  </div>
  <div class="form-group mb-3">
    <label for="positionen">Должность(en)</label>
    <input type="text" class="form-control" id="positionen" name="positionen" value="">
  </div>
  <div class="form-group mb-3">
    <label for="textuz">Текст отзыва(uz)</label>
    <input type="text" class="form-control" id="textuz" name="textuz" value="">
  </div>
  <div class="form-group mb-3">
    <label for="textru">Текст отзыва(ru)</label>
    <input type="text" class="form-control" id="textru" name="textru" value="">
  </div>
  <div class="form-group mb-3">
    <label for="texten">Текст отзыва(en)</label>
    <input type="text" class="form-control" id="texten" name="texten" value="">
  </div>
  
  <button type="submit" class="btn btn-primary">Опубликовать</button>
</form>


            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item3').classList.toggle("active");
   


</script>
<?php include('../footer2.php');?>