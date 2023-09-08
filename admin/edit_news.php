<!DOCTYPE html>

<?php session_start();



if(!isset($_SESSION['UserData']['Username'])){

    header("location:login.php");

    exit;

    }

    $jsondata=file_get_contents("../assets/news.json");

    $array_data=json_decode($jsondata,true);

    $item=$array_data[(int)$_GET['id']];

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

                        <h3 class="fs-4 mb-3">Изменить</h3>

                            

                        </div>

                    </div>

                    

                    



                </div>



            <div class="container-fluid px-4">

                



            <form action="edit_news2.php" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>"> 

  <div class="form-group mb-3" style="padding-top:20px">

    <label for="titleuz">

Название(uz)</label>

    <input type="text" class="form-control" id="titleuz" name="titleuz" value="<?php echo $item['titleuz'] ?>">

  </div>

  <div class="form-group mb-3" style="padding-top:20px">

    <label for="titleru">

Название(ru)</label>

    <input type="text" class="form-control" id="titleru" name="titleru" value="<?php echo $item['titleru'] ?>">

  </div>

  <div class="form-group mb-3" style="padding-top:20px">

    <label for="titleen">

Название(en)</label>

    <input type="text" class="form-control" id="titleen" name="titleen" value="<?php echo $item['titleen'] ?>">

  </div>

  <div class="form-group mb-3">

    <label for="time">Дата и время</label>

    <input type="text" class="form-control datetimepicker" id="time" name="time"  value="<?php echo $item['time'] ?>" readonly="">

  </div>

  <div class="form-group mb-3">

    <label for="rasm">

изображение</label>

    <input id="rasm" type="text" name="rasm"  value="<?php echo $item['rasm'] ?>" readonly="">

    <input id="views" type="hidden" name="views"  value="<?php echo $item['views'] ?>" readonly="">

	  <a href="../assets/newsmainimg/filemanager/dialog.php?relative_url=1&type=0&field_id=rasm" class="btn iframe-btn" type="button"><button class="btn btn-primary">Tanlash</button></a>

  </div>

  <div class="form-group mb-3">

    <label for="shortmeanuz">краткое описаниe(uz)</label>

    <textarea class="form-control" id="shortmeanuz" name="shortmeanuz"><?php echo $item['shortmeanuz'] ?></textarea>

  </div>

  <div class="form-group mb-3">

    <label for="shortmeanru">краткое описаниe(ru)</label>

    <textarea class="form-control" id="shortmeanru" name="shortmeanru"><?php echo $item['shortmeanru'] ?></textarea>

  </div>

  <div class="form-group mb-3">

    <label for="shortmeanen">краткое описаниe(en)</label>

    <textarea class="form-control" id="shortmeanen" name="shortmeanen"><?php echo $item['shortmeanen'] ?></textarea>

  </div>

  <div class="form-group mb-3">

    <label for="fullmeanuz">Полное описание(uz)</label>

    <textareamce class="form-control" id="fullmeanuz" name="fullmeanuz"><?php echo $item['fullmeanuz'] ?></textareamce>

  </div>

  <div class="form-group mb-3">

    <label for="fullmeanru">Полное описание(ru)</label>

    <textareamce class="form-control" id="fullmeanru" name="fullmeanru"><?php echo $item['fullmeanru'] ?></textareamce>

  </div>

  <div class="form-group mb-3">

    <label for="fullmeanen">Полное описание(en)</label>

    <textareamce class="form-control" id="fullmeanen" name="fullmeanen"><?php echo $item['fullmeanen'] ?></textareamce>

  </div>

  

  <button type="submit" class="btn btn-primary">Опубликовать</button>

</form>





            </div>



            <!--Page content ends here-->





            <script>

    document.getElementById('item1').classList.toggle("active");

   





</script>

<?php include('footer.php');?>