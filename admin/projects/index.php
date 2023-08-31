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

                    <div class="col-md-3">

                        <div class="d-flex justify-content-around">

                        <h3 class="fs-4 mb-3">Список проектов</h3>

                            

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

                $jsondata=file_get_contents("../../assets/projects.json");

                $array_data=json_decode($jsondata,true);

                







                $i=0;

                

                ?>

                <div class="row my-5">

                    <div class="col">

                        <table class="table bg-white rounded shadow-sm  table-hover">

                            <thead>

                                <tr>

                                    <th scope="col" width="50">#</th>

                                    <th scope="col">Название документа</th>

                                    <th scope="col">Файл</th>

                                    <th scope="col">Упраление</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php foreach($array_data as $news_item){?>

                                <tr>

                                    <th scope="row"><?php echo $i?></th>

                                    <td><?php echo $news_item['docnameru']?></td>

                                    <td><a href="../../assets/projects/source/<?php echo $news_item['file']?>">Скачать файл</a></td>

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



            <!--Page content ends here-->





<script>

    document.getElementById('item7').classList.toggle("active");

</script>

<?php include('../footer2.php');?>