<?php
if($_SESSION['admin'] == "true"){

}else{
    rdr("?page=index");
}
if($_POST){
    $name = $_POST['name'];
    $command = $_POST['command'];
    if($api->redeem->SaveRedeem($name,$command)){
        rdr("?page=backend");
    }else{
    }
}
