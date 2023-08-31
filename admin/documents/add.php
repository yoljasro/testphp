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
                        <h3 class="fs-4 mb-3">Добавить документ</h3>
                            
                        </div>
                    </div>
                    
                    

                </div>

            <div class="container-fluid px-4">
                

            <form action="add2.php" method="post" enctype="multipart/form-data">
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="docnameuz">
Название документа(uz)</label>
    <input type="text" class="form-control" id="docnameuz" name="docnameuz">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="docnameru">
    Название документа(ru)</label>
    <input type="text" class="form-control" id="docnameru" name="docnameru">
  </div>
  <div class="form-group mb-3" style="padding-top:20px">
    <label for="docnameen">
    Название документа(en)</label>
    <input type="text" class="form-control" id="docnameen" name="docnameen">
  </div>
  <div class="form-group mb-3">
    <label for="file">
Файл</label>
    <input id="file" type="text" name="file" value="" readonly="">
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