<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
}

if(isset($_GET['id'])){
    $jsondata=file_get_contents("../../assets/kurs.json");
    $array_data=json_decode($jsondata,true);
    array_splice($array_data,(int)$_GET['id'],1);
    $final_data=json_encode($array_data);
    file_put_contents('../../assets/kurs.json',$final_data);
}

header("location:index.php");
?>

