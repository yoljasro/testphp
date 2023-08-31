<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
}


if(isset($_POST['catuz'])&&isset($_POST['catru'])&&isset($_POST['caten'])){
    $jsondata=file_get_contents("../../assets/categories.json");
    $array_data=json_decode($jsondata,true);
    $catid=strtolower(preg_replace("/[^a-zA-Z]+/","",$_POST['caten']));
    $extra = array(
        'catuz'=>$_POST['catuz'],
        'catru'=>$_POST['catru'],
        'caten'=>$_POST['caten'],
        'catid'=>$catid
    );
    $array_data[]=$extra;
    $final_data=json_encode($array_data);
    file_put_contents('../../assets/categories.json',$final_data);
}

header("location:index.php");


?>

