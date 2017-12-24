<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10/6/2016
 * Time: 1:03 AM
 */
if(isset($_SESSION['username'])){

}else{
    rdr("?page=user");
}
?>
<html>
    <head>
        <title>Home</title>
        <?php require 'head.php';?>
    </head>
    <body>
    <?php require 'menu.php';?>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2>ยินดีต้องรับเข้าสู่เซิฟเวอร์ OrangeCraftPE</h2>
                <p>เราได้เปิดบิรการเซิฟ Minecraft Pocket Edition ให้เล่นฟรีโดยไม่เสียค่าเข้า</p>
                โดยเซิฟที่เปิดนั้นเป็นเซิฟแนว Suurvival หาของ สร้าง PvP กัน สุดมันส์์์
                IP: sv1.orangepe.com  Port: 19132
            </div>
        </div>
    </div>
    <?php require 'sidebar.php';?>
    <?php require 'footer.php'?>
    </body>
</html>
