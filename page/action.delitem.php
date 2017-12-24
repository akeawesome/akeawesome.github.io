<?php
if($_GET){
    $id = $_GET['id'];
    if($engine->Shop->delete($id)){
        rdr("?page=admin");
    }else{
        echo "Failed";
    }
}

?>
