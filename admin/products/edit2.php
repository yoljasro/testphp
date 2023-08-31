<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
}


if(isset($_POST['id'])&&isset($_POST['pnameuz'])&&isset($_POST['pnameru'])&&isset($_POST['pnameen'])&&isset($_POST['rasm'])&&isset($_POST['selcat'])){
    $jsondata=file_get_contents("../../assets/products.json");
    $array_data=json_decode($jsondata,true);
    
    $extra = array(
        'pnameuz'=>$_POST['pnameuz'],
        'pnameru'=>$_POST['pnameru'],
        'pnameen'=>$_POST['pnameen'],
        'rasm'=>$_POST['rasm'],
        'cats'=>$_POST['selcat']
    );
    array_splice($array_data,(int)$_POST['id'],1);
    $array_data[]=$extra;
    $final_data=json_encode($array_data);
    file_put_contents('../../assets/products.json',$final_data);
}



header("location:index.php");


?>

