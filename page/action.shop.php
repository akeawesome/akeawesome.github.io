<?php
/**
     * Created by PhpStorm.
     * User: Admin
     * Date: 10/6/2016
     * Time: 1:03 AM
     */
?>
    <html>
    <head>
        <title>Shop</title>
        <?php require 'head.php';?>
    </head>
    <body>
    <?php require 'menu.php';?>
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                if($_GET){
                    $id = $_GET['id'];
                    if($api->shop->buy($id)){

                    }else{
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-3">

    </div>
    <?php require 'footer.php'?>
    </body>
    </html>
