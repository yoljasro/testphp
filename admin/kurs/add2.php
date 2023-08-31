<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:../login.php");
    exit;
}


if(isset($_POST['docnameuz'])&&isset($_POST['docnameru'])&&isset($_POST['docnameen'])&&isset($_POST['file'])){
    $jsondata=file_get_contents("../../assets/kurs.json");
    $array_data=json_decode($jsondata,true);
    $extra = array(
        'docnameuz'=>$_POST['docnameuz'],
        'docnameru'=>$_POST['docnameru'],
        'docnameen'=>$_POST['docnameen'],
        'docnameuz2'=>$_POST['docnameuz2'],
        'docnameru2'=>$_POST['docnameru2'],
        'docnameen2'=>$_POST['docnameen2'],
        'docnameuz3'=>$_POST['docnameuz3'],
        'docnameru3'=>$_POST['docnameru3'],
        'docnameen3'=>$_POST['docnameen3'],
        'file'=>$_POST['file']
        
    );
    $array_data[]=$extra;
    $final_data=json_encode($array_data);
    file_put_contents('../../assets/kurs.json',$final_data);
}

header("location:index.php");


?>

