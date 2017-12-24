<?php
require 'api/api.php';

session_start();
ob_start();
if($_GET){

}else{
    rdr("?page=index");
}
if(isset($_GET['page'])){
    if($_GET['page'] == "logout"){
        unset($_SESSION['uid']);
        unset($_SESSION['username']);
        unset($_SESSION['point']);
        rdr("?page=login");
    }
    $page = 'page/page.'.$_GET['page'].'.php';
    if(file_exists($page)){
        require $page;
    }else{
        rdr("?page=index");
    }
}
if(isset($_GET['action'])){
    $page_a = 'page/action.'.$_GET['action'].'.php';
    if(file_exists($page_a)){
        require $page_a;
    }else{
        rdr("?page=index");
    }
}
