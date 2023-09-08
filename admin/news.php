<!DOCTYPE html>

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

                    <div class="col-md-3">

                        <div class="d-flex justify-content-around">

                        <h3 class="fs-4 mb-3">Список новостей</h3>

                            

                        </div>

                    </div>

                    

                    <div class="col-md-1">

                        <a href="add_news.php" style="text-decoration: none !important"><div class="d-flex justify-content-around bg-white rounded">

                        <h3 class="fs-2">+</h3>

                            

                        </div>

                        </a>

                    </div>



                </div>



            <div class="container-fluid px-4">

                

                <?php

                $jsondata=file_get_contents("../assets/news.json");

                $array_data=json_decode($jsondata,true);

                







                $i=0;

                

                ?>

                <div class="row my-5">

                    <div class="col">

                        <table class="table bg-white rounded shadow-sm  table-hover">

                            <thead>

                                <tr>

                                    <th scope="col" width="50">#</th>

                                    <th scope="col">Название</th>

                                    <th scope="col">Дата</th>

                                    <th scope="col">Упраление</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php foreach($array_data as $news_item){?>

                                <tr>

                                    <th scope="row"><?php echo $i?></th>

                                    <td><?php echo $news_item['titleuz']?></td>

                                    <td><?php echo $news_item['time']?></td>

                                    <td>

                                        <a href="view_news.php?id=<?php echo $i?>"><i class="fas fa-eye me-2"></i></a>

                                        <a href="edit_news.php?id=<?php echo $i?>"><i class="fas fa-pencil-alt me-2"></i></a>

                                        <a href="delete_news.php?id=<?php echo $i?>"><i class="fas fa-trash-alt me-2"></i></a>

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

    document.getElementById('item1').classList.toggle("active");

</script>

<?php include('footer.php');?>