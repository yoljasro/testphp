<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
    }
    $jsondata=file_get_contents("../../assets/staff2.json");
    $array_data=json_decode($jsondata,true);
    $item=$array_data[(int)$_GET['id']];
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
                        <h3 class="fs-4 mb-3">Изменить</h3>
                            
                        </div>
                    </div>
                    
                    

                </div>

            <div class="container-fluid px-4">
                

            <form action="edit2.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>"> 
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishuz">
Ф.И.О.(uz)</label>
    <input type="text" class="form-control" id="fishuz" name="fishuz" value="<?php echo $item['fishuz'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishru">
Ф.И.О.(ru)</label>
    <input type="text" class="form-control" id="fishru" name="fishru" value="<?php echo $item['fishru'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="fishen">
Ф.И.О.(en)</label>
    <input type="text" class="form-control" id="fishen" name="fishen" value="<?php echo $item['fishen'] ?>">
  </div>

  <div class="form-group mb-3">
    <label for="rasm">
изображение</label>
    <input id="rasm" type="text" name="rasm" value="<?php echo $item['rasm'] ?>" readonly="">
	  <a href="../../assets/staff/filemanager/dialog.php?relative_url=1&type=0&field_id=rasm" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
  </div>

  <div class="form-group mb-3" style="padding-top:20px">
    <label for="posiitionuz">
Должность(uz)</label>
    <input type="text" class="form-control" id="positionuz" name="positionuz" value="<?php echo $item['positionuz'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="positionru">
    Должность(ru)</label>
    <input type="text" class="form-control" id="positionru" name="positionru" value="<?php echo $item['positionru'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="positionen">
    Должность(en)</label>
    <input type="text" class="form-control" id="positionen" name="positionen" value="<?php echo $item['positionen'] ?>">
  </div>
  
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="instagram">
    About</label>
    <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $item['instagram'] ?>">
  </div>

  <button type="submit" class="btn btn-primary">Опубликовать</button>
</form>


            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item5').classList.toggle("active");
   


</script>
<?php include('../footer2.php');?>