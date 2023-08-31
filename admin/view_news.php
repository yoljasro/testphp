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
                        <h3 class="fs-4 mb-3">Предпросмотр</h3>
                        <a href="view_news.php?id=<?php if($_GET['id']=="0"){ echo $_GET['id'];}else{echo (int)$_GET['id']-1;}?>" <?php if($_GET['id']=="0"){echo "enableddisabled=\"true\"";}?>><i class="fas fa-arrow-alt-circle-left me-2"></i></a>
                        <a href="view_news.php?id=<?php if((int)$_GET['id']>count($array_data)-2){ echo $_GET['id'];}else{echo (int)$_GET['id']+1;}?>"><i class="fas fa-arrow-alt-circle-right me-2"></i></a>
                            
                        </div>
                    </div>
                    
                    

                </div>

            
            <div class="container-fluid px-4" style="padding-top:50px">
            <p><b>Новости: название (uz)</b></p>
            <p><?php echo $item['titleuz'];?></p>
            <p><b>Новости: название (ru)</b></p>
            <p><?php echo $item['titleru'];?></p>
            <p><b>Новости: название (en)</b></p>
            <p><?php echo $item['titleen'];?></p>
            <p><b>Новости: дата и время</b></p>
            <p><?php echo $item['time'];?></p>
            <p><b>Новости: изображения</b></p>
            <p><img src="../assets/newsmainimg/thumbs/<?php echo htmlspecialchars($item['rasm']);?>" width="100px" height="100px"></p>
            <p><b>Новости: краткое описания (uz)</b></p>
            <p><?php echo $item['shortmeanuz'];?></p>
            <p><b>Новости: краткое описания (ru)</b></p>
            <p><?php echo $item['shortmeanru'];?></p>
            <p><b>Новости: краткое описания (en)</b></p>
            <p><?php echo $item['shortmeanen'];?></p>
            <p><b>Новости:  полное описания (uz)</b></p>
            <p><?php echo $item['fullmeanuz'];?></p>
            <p><b>Новости:  полное описания (ru)</b></p>
            <p><?php echo $item['fullmeanru'];?></p>
            <p><b>Новости:  полное описания (en)</b></p>
            <p><?php echo $item['fullmeanen'];?></p>

            </div>

            <!--Page content ends here-->


            <script>
    document.getElementById('item1').classList.toggle("active");
   


</script>
<?php include('footer.php');?>