<?php session_start();



if(!isset($_SESSION['UserData']['Username'])){

    header("Location:index.php");

    exit;

    }

    ?>



        <?php include('sidebar.php');?>



            <!--Page content starts from here-->



            



            <!--Page content ends here-->





<?php include('footer.php');?>