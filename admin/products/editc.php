<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
    }
    $jsondata=file_get_contents("../../assets/categories.json");
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
                

            <form action="edit2c.php" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>"> 
              <input type="hidden" name="catid" id="catid" value="<?php echo $item['catid']?>"> 
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="catuz">
Название категории(uz)</label>
    <input type="text" class="form-control" id="catuz" name="catuz" value="<?php echo $item['catuz'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="catru">
    Название категории(ru)</label>
    <input type="text" class="form-control" id="catru" name="catru" value="<?php echo $item['catru'] ?>">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="caten">
    Название категории(en)</label>
    <input type="text" class="form-control" id="caten" name="caten" value="<?php echo $item['caten'] ?>">
  </div>

  <button type="submit" class="btn btn-primary">Опубликовать</button>
</form>


            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item6').classList.toggle("active");
   


</script>
<?php include('../footer2.php');?>