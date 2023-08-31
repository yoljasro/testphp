<?php session_start();



if(!isset($_SESSION['UserData']['Username'])){

    header("Location:../login.php");

    exit;

    }

    ?>

        <?php include('../sidebar2.php');?>



            <!--Page content starts from here-->



            <div class="container-fluid px-4">

                <div class="row g-3">

                    <div class="col-md-3">

                        <div class="d-flex justify-content-around">

                        <h3 class="fs-4 mb-3">Список предметов</h3>

                            

                        </div>

                    </div>

                    

                    <div class="col-md-1">

                        <a href="add.php" style="text-decoration: none !important"><div class="d-flex justify-content-around bg-white rounded">

                        <h3 class="fs-2">+</h3>

                            

                        </div>

                        </a>

                    </div>



                </div>



            <div class="container-fluid px-4">

                

                <?php

                $jsondata=file_get_contents("../../assets/products.json");

                $array_data=json_decode($jsondata,true);

                $jsondata2=file_get_contents("../../assets/categories.json");

                $array_data2=json_decode($jsondata2,true);

                $cat_list=array();

                foreach($array_data2 as $catitem){

                    $cat_list[]=$catitem['catid'];

                }

                $i=0;

                ?>

                

                

                <div class="row my-5">

                    <div class="col">

                        <table class="table bg-white rounded shadow-sm  table-hover">

                            <thead>

                                <tr>

                                    <th scope="col" width="50">#</th>

                                    <th scope="col">Продукт</th>

                                    <th scope="col">Категория</th>

                                    <th scope="col">Упраление</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php foreach($array_data as $news_item){?>

                                <tr>

                                    <th scope="row"><?php echo $i?></th>

                                    <td><?php echo $news_item['pnameru']?></td>

                                    <td>

                                        <?php

                                        $catstring="";

                                        foreach($news_item['cats'] as $catid){

                                            if(in_array($catid,$cat_list,false)){

                                                $catstring .= $catid.", ";

                                            }else{

                                                $catstring .= '<span style="color:red;">'.$catid.'</span>'.", ";

                                            }

                                            

                                        }

                                        echo substr($catstring,0,strlen($catstring)-2);?>

                                    </td>

                                    <td>

                                        <a href="edit.php?id=<?php echo $i?>"><i class="fas fa-pencil-alt me-2"></i></a>

                                        <a href="delete.php?id=<?php echo $i?>"><i class="fas fa-trash-alt me-2"></i></a>

                                </td>

                                </tr>

                                <?php $i=$i+1;}?>

                                

                            </tbody>

                        </table>

                    </div>

                </div>



            </div>



            </div>





            <!--Page content ends here-->





            <div class="container-fluid px-4">

                <div class="row g-3">

                    <div class="col-md-3">

                        <div class="d-flex justify-content-around">

                        <h3 class="fs-4 mb-3">Список категории</h3>

                            

                        </div>

                    </div>

                    

                    <div class="col-md-1">

                        <a href="addc.php" style="text-decoration: none !important"><div class="d-flex justify-content-around bg-white rounded">

                        <h3 class="fs-2">+</h3>

                            

                        </div>

                        </a>

                    </div>



                </div>



            <div class="container-fluid px-4">

                

                <?php

                $jsondata=file_get_contents("../../assets/categories.json");

                $array_data=json_decode($jsondata,true);

                $i=0;

                ?>

                <div class="row my-5">

                    <div class="col">

                        <table class="table bg-white rounded shadow-sm  table-hover">

                            <thead>

                                <tr>

                                    <th scope="col" width="50">#</th>

                                    <th scope="col">Категория</th>

                                    <th scope="col">Упраление</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php foreach($array_data as $news_item){?>

                                <tr>

                                    <th scope="row"><?php echo $i?></th>

                                    <td><?php echo $news_item['catru']?></td>

                                    <td>

                                        <a href="editc.php?id=<?php echo $i?>"><i class="fas fa-pencil-alt me-2"></i></a>

                                        <a href="deletec.php?id=<?php echo $i?>"><i class="fas fa-trash-alt me-2"></i></a>

                                </td>

                                </tr>

                                <?php $i=$i+1;}?>

                                

                            </tbody>

                        </table>

                    </div>

                </div>



            </div>



            </div>





            <!--Page content ends here-->





<script>

    document.getElementById('item5').classList.toggle("active");

</script>

<?php include('../footer2.php');?>