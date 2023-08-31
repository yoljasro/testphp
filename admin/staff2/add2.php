<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
}


if(isset($_POST['fishuz'])&&isset($_POST['fishru'])&&isset($_POST['fishen'])&&isset($_POST['rasm'])&&isset($_POST['positionuz'])&&isset($_POST['positionru'])&&isset($_POST['positionen'])&&isset($_POST['instagram'])){
    $jsondata=file_get_contents("../../assets/staff2.json");
    $array_data=json_decode($jsondata,true);
    $extra = array(
        'fishuz'=>$_POST['fishuz'],
        'fishru'=>$_POST['fishru'],
        'fishen'=>$_POST['fishen'],
        'rasm'=>$_POST['rasm'],
        'positionuz'=>$_POST['positionuz'],
        'positionru'=>$_POST['positionru'],
        'positionen'=>$_POST['positionen'],
        "textuz"=>$_POST['textuz'],
        "textru"=>$_POST['textru'],
        "texten"=>$_POST['texten'],
        "instagram"=>$_POST['instagram']
    );
    $array_data[]=$extra;
    $final_data=json_encode($array_data);
    file_put_contents('../../assets/staff2.json',$final_data);
}

header("location:index.php");


?>

