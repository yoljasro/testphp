<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}

if(isset($_GET['id'])){
    $jsondata=file_get_contents("../assets/news.json");
    $array_data=json_decode($jsondata,true);
    array_splice($array_data,(int)$_GET['id'],1);
    function cmp(array $a, array $b) {
        if ($a['time'] < $b['time']) {
            return 1;
        } else if ($a['time'] > $b['time']) {
            return -1;
        } else {
            return 0;
        }
    }
    usort($array_data,'cmp');
    $final_data=json_encode($array_data);
    
    file_put_contents('../assets/news.json',$final_data);
}

header("location:news.php");
?>

