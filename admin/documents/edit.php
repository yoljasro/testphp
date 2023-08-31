<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
    }
    $jsondata=file_get_contents("../../assets/documents.json");
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
    <label for="docnameuz">
Ф.И.О.(uz)</label>
    <input type="text" class="form-control" id="docnameuz" name="docnameuz" value="<?php echo $item['docnameuz'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="docnameru">
Ф.И.О.(ru)</label>
    <input type="text" class="form-control" id="docnameru" name="docnameru" value="<?php echo $item['docnameru'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="docnameen">
Ф.И.О.(en)</label>
    <input type="text" class="form-control" id="docnameen" name="docnameen" value="<?php echo $item['docnameen'] ?>">
  </div>

  <div class="form-group mb-3">
    <label for="file">
изображение</label>
    <input id="file" type="text" name="file" value="<?php echo $item['file'] ?>" readonly="">
	  <a href="../../assets/documents/filemanager/dialog.php?relative_url=1&type=0&field_id=file" class="btn iframe-btn" type="button"><button class="btn btn-primary"> Bыбрать</button></a>
  </div>

  
  <button type="submit" class="btn btn-primary">Опубликовать</button>
</form>


            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item7').classList.toggle("active");
   


</script>
<?php include('../footer2.php');?>