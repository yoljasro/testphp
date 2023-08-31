<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
    }
    ?>
<?php include('sidebar.php');?>

            <!--Page content starts from here-->

            <div class="container-fluid px-4">
                <div class="row g-3">
                    <div class="col-md-1">
                        <a href="news.php" style="text-decoration: none !important"><div class="d-flex justify-content-around bg-white rounded">
                        <h3 class="fs-2"><i class="fas fa-long-arrow-alt-left me-2"></i></h3>
                            
                        </div>
                        </a>
                    </div>    
                    <div class="col-md-3">
                        <div class="d-flex justify-content-around">
                        <h3 class="fs-4 mb-3">Добавить новость</h3>
                            
                        </div>
                    </div>
                    
                    

                </div>

            <div class="container-fluid px-4">
                

            <form action="add_news2.php" method="post" enctype="multipart/form-data">
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="title">
Название(uz)</label>
    <input type="textuz" class="form-control" id="titleuz" name="titleuz">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="titleru">
Название(ru)</label>
    <input type="text" class="form-control" id="titleru" name="titleru">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="titleen">
Название(en)</label>
    <input type="text" class="form-control" id="titleen" name="titleen">
  </div>
  <div class="form-group mb-3">
    <label for="time">Дата и время</label>
    <input type="text" class="form-control datetimepicker" id="time" name="time" value="<?php date_default_timezone_set('Asia/Tashkent');
$date = date('Y-m-d H:i', time()); echo $date  ?>" readonly="">
  </div>
  <div class="form-group mb-3">
    <label for="rasm">
изображение</label>
    <input id="rasm" type="text" name="rasm" value="" readonly="">
	  <a href="../assets/newsmainimg/filemanager/dialog.php?relative_url=1&type=0&field_id=rasm" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
  </div>
  <div class="form-group mb-3">
    <label for="shortmeanuz">краткое описание(uz)</label>
    <textarea class="form-control" id="shortmeanuz" name="shortmeanuz" value=""></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="shortmeanru">краткое описание(ru)</label>
    <textarea class="form-control" id="shortmeanru" name="shortmeanru" value=""></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="shortmeanen">краткое описание(en)</label>
    <textarea class="form-control" id="shortmeanen" name="shortmeanen" value=""></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="fullmeanuz">Полное описание(uz)</label>
    <textareamce class="form-control" id="fullmeanuz" name="fullmeanuz" value=""></textareamce>
  </div>
  <div class="form-group mb-3">
    <label for="fullmeanru">Полное описание(ru)</label>
    <textareamce class="form-control" id="fullmeanru" name="fullmeanru" value=""></textareamce>
  </div>
  <div class="form-group mb-3">
    <label for="fullmeanen">Полное описание(en)</label>
    <textareamce class="form-control" id="fullmeanen" name="fullmeanen" value=""></textareamce>
  </div>
  
  <button type="submit" class="btn btn-primary">Опубликовать</button>
</form>


            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item1').classList.toggle("active");
   


</script>
<?php include('footer.php');?>