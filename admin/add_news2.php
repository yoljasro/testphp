<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}


if(isset($_POST['titleuz'])&&isset($_POST['titleru'])&&isset($_POST['titleen'])&&isset($_POST['time'])&&isset($_POST['rasm'])&&isset($_POST['shortmeanuz'])&&isset($_POST['shortmeanru'])&&isset($_POST['shortmeanen'])&&isset($_POST['fullmeanuz'])&&isset($_POST['fullmeanru'])&&isset($_POST['fullmeanen'])){
    $jsondata=file_get_contents("../assets/news.json");
    $array_data=json_decode($jsondata,true);
    $extra = array(
        'titleuz'=>$_POST['titleuz'],
        'titleru'=>$_POST['titleru'],
        'titleen'=>$_POST['titleen'],
        'time'=>$_POST['time'],
        'rasm'=>$_POST['rasm'],
        'shortmeanuz'=>$_POST['shortmeanuz'],
        'shortmeanru'=>$_POST['shortmeanru'],
        'shortmeanen'=>$_POST['shortmeanen'],
        "fullmeanuz"=>$_POST['fullmeanuz'],
        "fullmeanru"=>$_POST['fullmeanru'],
        "fullmeanen"=>$_POST['fullmeanen'],
        "views"=>"0"
    );
    $array_data[]=$extra;
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

