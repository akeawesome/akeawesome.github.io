<?php
if(isset($_SESSION['username'])){

}else{
    rdr("?page=login");
}
if($_SESSION['admin'] == "true"){

}else{
    rdr("?page=index");
}
if($_POST){
    $image = $_POST['image'];
    $title = $_POST['name'];
    $price = $_POST['price'];
    $command = $_POST['command'];
    if($api->shop->add($title,$price,$command,$image)){
        rdr("?page=backend");
    }else{
        echo "failed";
    }
}