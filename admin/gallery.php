<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
    }
    ?>

        <?php include('sidebar.php');?>

            <!--Page content starts from here-->

            <iframe  width="100%" height="550" frameborder="0"
	            src="../assets/gallery/filemanager/dialog.php?type=0">
            </iframe>

            <!--Page content ends here-->
            <script>
    document.getElementById('item2').classList.toggle("active");
</script>

<?php include('footer.php');?>